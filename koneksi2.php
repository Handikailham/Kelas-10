<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "db_toko_buku";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert'(Gagal tersambung Dengan Database.')</script>");
}



?>