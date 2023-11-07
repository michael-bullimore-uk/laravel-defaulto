<?php

declare(strict_types=1);

namespace MIBU\Defaulto\Tests;

use Illuminate\Support\Facades\Hash;

class HashingTest extends \MIBU\Defaulto\Tests\TestCase
{
    public function test_bcrypt_rounds()
    {
        $hash = Hash::driver('bcrypt')->make('foo');
        $this->assertEquals('12', explode('$', $hash)[2]);
    }
}
