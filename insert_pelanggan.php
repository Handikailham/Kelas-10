<?php
require "koneksi2.php";

$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

$sql = "INSERT INTO tb_pelanggan(nama_pelanggan, alamat, email) 
VALUES ( '$nama_pelanggan', '$alamat', '$email')";


mysqli_query($conn,$sql);


header('location : data_pelanggan.php');

?>