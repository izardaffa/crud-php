<?php

include "koneksi.php";

$sql = "SELECT * FROM barang";
$query = mysqli_query($koneksi, $sql);
$no = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP Dasar</title>
    <style>
        table {
            width: 400px;
            margin-bottom: 1rem;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php while($barang = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $barang['name'] ?></td>
            <td><?= $barang['stock'] ?></td>
            <td><?= $barang['price'] ?></td>
            <td>
                <a href="edit.php?id=<?= $barang['id'] ?>"><button>Edit</button></a>
                <a href="hapus.php?id=<?= $barang['id'] ?>"><button>Hapus</button></a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <div>
        <a href="tambah.php"><button>Tambah Barang</button></a>
    </div>
</body>
</html>