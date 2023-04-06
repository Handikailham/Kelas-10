<?php
require "koneksi.php";

$id_transaksi = $_POST['id_transaksi'];
$id_buku = $_POST['id_buku'];
$id_pelanggan = $_POST['id_pelanggan'];
$jumlah = $_POST['jumlah'];
// $tanggal = $_POST['tanggal'];

$sql = "SELECT harga FROM tb_buku WHERE id_buku = '$id_buku'";
var_dump($sql);
$result = mysqli_query($conn, $sql);
echo"<br>";

while($row = mysqli_fetch_array($result)):
    var_dump($row);
    echo"<br>";
    $harga = $row['harga'];
    $total_pembayaran = $_POST['jumlah'] * $row['harga'];
    var_dump($total_pembayaran);

    $query = "UPDATE tb_transaksi SET id_pelanggan = '$id_pelanggan', id_buku = '$id_buku', jumlah = '$jumlah', harga_saat_ini = '$harga', total_pembayaran = '$total_pembayaran' WHERE id_transaksi = '$id_transaksi'";
    var_dump($query);

    $hasil = mysqli_query($conn, $query);
    if($hasil){
        header("location:data_transaksi.php");
    }
endwhile;
?>