<?php
require "koneksi2.php";

$id_buku = $_GET['id_buku'] ?? 0;

if($id_buku  > 0) {
    $sql="SELECT * FROM tb_buku WHERE id_buku = '$id_buku'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)):
        $id_buku = $row['id_buku'];
        $nama_buku = $row['nama_buku'];
        $pengarang = $row['pengarang'];
        $harga = $row['harga'];
    endwhile;
    $form_action = 'edit_buku.php';
    $title = "Edit Data Buku";
}
else {
    $id_buku = '';
    $nama_buku = '';
    $pengarang = '';
    $harga = '';
    $form_action = 'insert_buku.php';
    $title = 'Tambah Data Buku';
}

?>