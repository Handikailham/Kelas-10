<?php
require "koneksi2.php";

$nama_buku = $_POST['nama_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];

$sql = "INSERT INTO tb_buku(nama_buku, penulis, penerbit, harga) 
VALUES ( '$nama_buku', '$penulis', '$penerbit', '$harga')";


mysqli_query($conn,$sql);


header('location : data_buku.php');

?>