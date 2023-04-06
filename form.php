

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert_buku.php" method="post">
    <input type="hidden" name="id_buku">

    <label for="nama_buku">Nama Buku</label>
    <input type="text" name="nama_buku" id="nama_buku">

    <label for="penulis">Penulis</label> 
    <input type="text" name="penulis" id="penulis">

    <label for="penerbit">Penerbit</label>
    <input type="text" name="penerbit" id="penerbit">

    <label for="harga">Harga</label>
    <input type="number" name="harga" id="harga">
    
    <input type="submit">
    </form>
</body>
</html>



