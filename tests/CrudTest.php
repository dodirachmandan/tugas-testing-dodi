<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../functions.php";

class CrudTest extends TestCase
{
    public function test_create()
    {
        $data = ["nama" => "Dodi", "telepon" => "0822334455"];
        $this->assertEquals("sukses", createKontak($data));
    }

    public function test_update()
    {
        $this->assertEquals("sukses", updateKontak(1, ["nama" => "Update"]));
    }

    public function test_delete()
    {
        $this->assertEquals("sukses", deleteKontak(1));
    }
}
