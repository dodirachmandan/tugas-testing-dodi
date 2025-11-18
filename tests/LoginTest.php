<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/functions.php';

class LoginTest extends TestCase
{
    public function testLoginValid()
    {
        $this->assertEquals("berhasil", login("admin", "1234"));
    }

    public function testLoginInvalid()
    {
        $this->assertEquals("gagal", login("salah", "password"));
    }
}
