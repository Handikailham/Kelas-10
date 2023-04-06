<?php
require "koneksi2.php";

$id_buku = $_POST['id_buku'];
$nama_buku = $_POST['nama_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];

$sql = "UPDATE tb_buku SET nama_buku = '$nama_buku', penulis = '$penulis', penerbit = '$penerbit',
 harga = '$harga' WHERE id_buku = '$id_buku'";
 mysqli_query($conn, $sql);
 header("location: data_buku.php");

?>