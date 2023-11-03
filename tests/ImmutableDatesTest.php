<?php

declare(strict_types=1);

namespace MIBU\Defaulto\Tests;

use Carbon\CarbonImmutable;

class ImmutableDatesTest extends TestCase
{
    public function test_immutable_dates()
    {
        $this->assertInstanceOf(CarbonImmutable::class, now());
    }
}
