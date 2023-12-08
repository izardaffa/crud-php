<?php

include "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM barang WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);

while($barang = mysqli_fetch_assoc($query)) :

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <style>
        label, input {
            display: block;
        }

        .button-group {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <form action="proses-edit.php" method="post">
        <input type="hidden" name="id" value="<?= $barang['id'] ?>">

        <div class="input-group">
            <label for="name">Nama Barang</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama barang" required value="<?= $barang['name'] ?>">
        </div>
        
        <div class="input-group">
            <label for="stock">Stok</label>
            <input type="number" name="stock" id="stock" placeholder="Masukkan jumlah stok barang" required value="<?= $barang['stock'] ?>">
        </div>
        
        <div class="input-group">
            <label for="price">Harga</label>
            <input type="number" name="price" id="price" placeholder="Masukkan harga barang" required value="<?= $barang['price'] ?>">
        </div>
        
        <div class="button-group">
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>

<?php endwhile; ?>