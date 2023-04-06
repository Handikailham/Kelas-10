<?php 
require "koneksi.php";

$sql = "SELECT tb_transaksi.id_transaksi, tb_pelanggan.id_pelanggan, tb_pelanggan.nama_pelanggan, tb_buku.id_buku, tb_buku.nama_buku, tb_transaksi.jumlah, tb_transaksi.harga_saat_ini,
tb_transaksi.total_pembayaran
FROM tb_pelanggan
INNER JOIN tb_transaksi ON tb_pelanggan.id_pelanggan = tb_transaksi.id_pelanggan
INNER JOIN tb_buku ON tb_buku.id_buku = tb_transaksi.id_buku ORDER BY id_transaksi";

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<head>
    <title>Data Transaksi</title>
</head>
<body>
    <a href="index.php">Tambah Data Transaksi</a>
    <table border="1">
        <tr>
            <th>No Transaksi</th>
            <th>Nama Pelanggan</th>
            <th>Nama Buku</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total Pembayaran</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)): 
            $total_pembayaran = $row['jumlah'] * $row['harga_saat_ini'] 
        ?> 
        <tr>
            <td><?=$row['id_transaksi']?></td>
            <td><?=$row['nama_pelanggan']?></td>
            <td><?=$row['nama_buku']?></td>
            <td><?=$row['jumlah']?></td>
            <td><?=$row['harga_saat_ini']?></td>
            <td ><?=$total_pembayaran?></td>
            <td>
                <a href="edit_transaksi.php?id_transaksi=<?=$row['id_transaksi']?>">Edit</a>
                <a href="hapus_transaksi.php?id_transaksi=<?=$row['id_transaksi']?>">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>