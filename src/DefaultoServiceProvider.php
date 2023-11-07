<?php

declare(strict_types=1);

namespace MIBU\Defaulto;

use Carbon\CarbonImmutable;
use Illuminate\Contracts\Foundation\CachesConfiguration;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\ServiceProvider;

class DefaultoServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/defaulto.php', 'defaulto');

        $this->overrideConfigIfNotCached();
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/defaulto.php' => config_path('defaulto.php'),
            ], 'defaulto-config');
        }

        if (config('defaulto.eloquent_strict_mode')) {
            Model::shouldBeStrict(!$this->app->isProduction());
        }

        if (config('defaulto.immutable_dates')) {
            Date::use(CarbonImmutable::class);
        }

        Relation::requireMorphMap(config('defaulto.eloquent_relation_req_morph_map'));
    }

    private function overrideConfigIfNotCached()
    {
        $notCached = !($this->app instanceof CachesConfiguration && $this->app->configurationIsCached());
        if ($notCached) {
            $configNested = config('defaulto.config', []);
            $configFlat = Arr::dot($configNested);

            config($configFlat); // Override
        }
    }
}
