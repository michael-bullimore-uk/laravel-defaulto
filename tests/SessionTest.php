<?php

declare(strict_types=1);

namespace MIBU\Defaulto\Tests;

use Illuminate\Session\EncryptedStore;

class SessionTest extends TestCase
{
    public function test_session_encrypt()
    {
        $this->assertInstanceOf(EncryptedStore::class, session()->driver());
    }

    public function test_session_expire_on_close()
    {
        // dd(cookie());
    }

    public function test_session_same_site()
    {
        // $this->assertEquals('strict', cookie()->getSameSite());
    }

    public function test_session_secure()
    {
        // $this->assertTrue(cookie()->isSecure());
    }
}
