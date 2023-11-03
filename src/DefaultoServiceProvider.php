<?php

declare(strict_types=1);

namespace MIBU\Defaulto;

use Carbon\CarbonImmutable;
use Illuminate\Contracts\Foundation\CachesConfiguration;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\ServiceProvider;

class DefaultoServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/defaulto.php', 'defaulto');

        if (! ($this->app instanceof CachesConfiguration && $this->app->configurationIsCached())) {
            config(
                config('defaulto.merge_config', [])
            );
        }
    }

    public function boot(): void
    {
        if (config('defaulto.immutable_dates')) {
            Date::use(CarbonImmutable::class);
        }
    }
}
