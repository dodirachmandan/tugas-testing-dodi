<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../functions.php";

class LoginTest extends TestCase
{
    public function test_login_valid()
    {
        $this->assertEquals("berhasil", login("admin", "1234"));
    }

    public function test_login_invalid()
    {
        $this->assertEquals("gagal", login("salah", "password"));
    }
}
