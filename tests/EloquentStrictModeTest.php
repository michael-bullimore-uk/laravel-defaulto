<?php

declare(strict_types=1);

namespace MIBU\Defaulto\Tests;

use Illuminate\Database\Eloquent\Model;

class EloquentStrictModeTest extends TestCase
{
    public function test_eloquent_strict_mode()
    {
        $this->assertTrue(Model::preventsLazyLoading());
        $this->assertTrue(Model::preventsSilentlyDiscardingAttributes());
        $this->assertTrue(Model::preventsAccessingMissingAttributes());
    }
}
