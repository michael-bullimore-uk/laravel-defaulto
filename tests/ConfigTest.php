<?php

declare(strict_types=1);

namespace MIBU\Defaulto\Tests;

class ConfigTest extends TestCase
{
    public function test_session_encrypt()
    {
        $this->assertTrue(config('session.encrypt'));
    }

    public function test_session_expire_on_close()
    {
        $this->assertTrue(config('session.expire_on_close'));
    }

    public function test_session_same_site()
    {
        $this->assertEquals('strict', config('session.same_site'));
    }

    public function test_session_secure()
    {
        $this->assertTrue(config('session.secure'));
    }
}
