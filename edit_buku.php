<?php
include "koneksi2.php";

$id_buku = $_GET['id_buku'];
$sql = "SELECT * FROM tb_buku WHERE id_buku = $id_buku";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)):

   ?>


<!DOCTYPE html>
<html>
<body>
        <form action="update_buku.php" method="post">
        <input type="hidden" name ="id_buku" value="<?=$row['id_buku']?>">

        <label for="nama_buku">Nama buku</label>
        <input type="text" id="nama_buku" name="nama_buku" value="<?=$row['nama_buku']?>">
        <br>
        <br>
        <name= "penulis">
        <label for="penulis">Penulis</label>
        <input type="text" id="penulis" name="penulis" value="<?=$row['penulis']?>">
        <br>
        <br>
        <name= "penerbit">
        <label for="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name="penerbit" value="<?=$row['penerbit']?>">
        <br>
        <br>
        <name= "harga">
        <label for="harga">Harga</label>
        <input type="text" id="harga" name="harga" value="<?=$row['harga']?>">
        <br>
        <br>
        <input type="submit" value="simpan">

    </body>
 </html>
 <?php endwhile ?>