<?php
require "koneksi.php";

$id_buku = $_POST['id_buku'];
$id_pelanggan = $_POST['id_pelanggan'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];

$query = mysqli_query($conn, "SELECT harga FROM tb_buku WHERE id_buku = '$id_buku'");
while ($row = mysqli_fetch_array($query)):
    $harga_saat_ini = $row['harga'];
    $total_pembayaran = $jumlah * $harga_saat_ini;

    $sql = "INSERT INTO tb_transaksi VALUES (null, '$tanggal', '$id_pelanggan', '$id_buku', '$harga_saat_ini', '$jumlah', '$total_pembayaran')";
    mysqli_query($conn, $sql);
endwhile;
header("location:data_transaksi.php");
?>