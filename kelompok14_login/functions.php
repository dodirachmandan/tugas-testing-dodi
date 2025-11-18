<?php

function login($username, $password)
{
    if ($username == "admin" && $password == "1234") {
        return "berhasil";
    }
    return "gagal";
}

function createKontak($data)
{
    if (!empty($data["nama"]) && !empty($data["telepon"])) {
        return "sukses";
    }
    return "gagal";
}

function updateKontak($id, $data)
{
    if ($id > 0 && !empty($data["nama"])) {
        return "sukses";
    }
    return "gagal";
}

function deleteKontak($id)
{
    if ($id > 0) {
        return "sukses";
    }
    return "gagal";
}
