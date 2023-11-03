<?php

declare(strict_types=1);

namespace MIBU\Defaulto\Tests;

class ConfigTest extends TestCase
{
    public function test_session_encrypted()
    {
        $this->assertTrue(config('session.encrypt'));
    }

    public function test_session_expire_on_close()
    {
        $this->assertTrue(config('session.expire_on_close'));
    }

    public function test_session_same_site_strict()
    {
        $this->assertEquals('strict', config('session.same_site'));
    }

    public function test_session_secure_cookies()
    {
        $this->assertTrue(config('session.secure'));
    }
}
