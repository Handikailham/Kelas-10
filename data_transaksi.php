<?php
require "koneksi2.php";

$sql = "SELECT tb_transaksi.id_transaksi, tb_pelanggan.nama_pelanggan, tb_buku.nama_buku, tb_transaksi.harga, tb_transaksi.jumlah, tb_transaksi.total_pembayaran 
FROM tb_buku INNER JOIN tb_transaksi ON tb_buku.id_buku = tb_transaksi.id_buku 
INNER JOIN tb_pelanggan ON tb_pelanggan.id_pelanggan = tb_transaksi.id_pelanggan";
$result = mysqli_query ($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <a href="form_insert_transaksi.php">Insert Transaksi</a>
    <table border ="1">
    <tr>
        <th>Id_Transaksi</th>
        <th>Nama Pelanggan</th>
        <th>Nama Buku</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total Pembayaran</th>
        <th>Aksi</th>
    </tr>
    <?php
    while ($row=mysqli_fetch_assoc($result)):
        $total_pembayaran = $row['jumlah'] * $row['harga']
    ?>
    <tr>
        <td><?php echo $row['id_transaksi']?></td>
        <td><?php echo $row['nama_pelanggan']?></td>
        <td><?php echo $row['nama_buku']?></td>
        <td><?php echo $row['harga']?></td>
        <td><?php echo $row['jumlah']?></td>
        <td><?php echo $total_pembayaran?></td>

        <td>
            <a href="edit_transaksi.php?id_transaki=<?= $row['id_transaksi']?>">Edit</a>
            <a href="delete_transaksi.php?id_transaksi=<?= $row['id_transaksi']?>">Hapus</a>
        </td>
        <?php endwhile ?>
    </tr>
    </table>
    </center>
</body>
</html>