<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "db_toko_buku";

$conn = mysqli_connect($server_name, $username, $password, $database_name);

if(!$conn){
    die("Koneksi Gagal:" .mysqli_connect_error());
}
//  else{
//     echo "<center><br><br><br><br><br><br><br><br><br><br>Koneksi Gagal<br><br><br><br><br>
//     (tapi boong)<br>";
// }
?>