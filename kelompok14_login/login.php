<?php
require "functions.php";

if (isset($_POST["login"])) {
    $hasil = login($_POST["username"], $_POST["password"]);
    echo "Hasil login: " . $hasil;
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="username">
    <br><br>
    <input type="password" name="password" placeholder="password">
    <br><br>
    <button name="login">Login</button>
</form>
