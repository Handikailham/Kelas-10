<?php
require "koneksi2.php";

$sql = "SELECT * FROM tb_pelanggan";
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
    
    <table border ="1">
    <tr>
        <th>Id Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php
    while ($row=mysqli_fetch_assoc($result)):
    ?>
    <tr>
        <td><?php echo $row['id_pelanggan']?></td>
        <td><?php echo $row['nama_pelanggan']?></td>
        <td><?php echo $row['alamat']?></td>
        <td><?php echo $row['email']?></td>
        
        <td>
        <a href="delete_pelanggan.php?id_pelanggan=<?= $row['id_pelanggan']?>">Hapus</a>
        </td>
        <?php endwhile ?>
    </tr>
    </table>
</body>
</html>