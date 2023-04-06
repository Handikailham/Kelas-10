<?php
require "koneksi2.php";

$sql = "SELECT * FROM tb_buku";
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
    <table border ="1">
    <tr>
        <th>Id Buku</th>
        <th>Nama Buku</th>
        <th>Penulis</th>
        <th>penerbit</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    <?php
    while ($row=mysqli_fetch_assoc($result)):
    ?>
    <tr>
        <td><?php echo $row['id_buku']?></td>
        <td><?php echo $row['nama_buku']?></td>
        <td><?php echo $row['penulis']?></td>
        <td><?php echo $row['penerbit']?></td>
        <td><?php echo $row['harga']?></td>

        <td>
            <a href="edit_buku.php?id_buku=<?= $row['id_buku']?>">Edit</a>
            <a href="delete_buku.php?id_buku=<?= $row['id_buku']?>">Hapus</a>
        </td>
        <?php endwhile ?>
    </tr>
    </table>
    </center>
</body>
</html>