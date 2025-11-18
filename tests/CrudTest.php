<?php

use PHPUnit\Framework\TestCase;

require_once dirname(__DIR__) . '/functions.php';

class CrudTest extends TestCase
{
    public function testCreateKontak()
    {
        $data = [
            "nama" => "Dodi",
            "telepon" => "0822334455"
        ];

        $this->assertEquals("sukses", createKontak($data));
    }

    public function testUpdateKontak()
    {
        $this->assertEquals("sukses", updateKontak(1, ["nama" => "Update"]));
    }

    public function testDeleteKontak()
    {
        $this->assertEquals("sukses", deleteKontak(1));
    }
}
