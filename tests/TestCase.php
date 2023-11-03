<?php

declare(strict_types=1);

namespace MIBU\Defaulto\Tests;

use MIBU\Defaulto\DefaultoServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function defineEnvironment($app)
    {
        $app['config']->set([
            // 'database.default' => 'testing',
        ]);
    }

    protected function getPackageProviders($app): array
    {
        return [
            DefaultoServiceProvider::class,
        ];
    }
}
