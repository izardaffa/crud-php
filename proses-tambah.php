<?php

include "koneksi.php";

$name = $_POST['name'];
$stock = $_POST['stock'];
$price = $_POST['price'];

$sql = "INSERT INTO barang (name, stock, price) VALUES ('$name', '$stock', '$price')";
$query = mysqli_query($koneksi, $sql);

if($query) {
    header('location:index.php?tambah=sukses');
} else {
    header('location:index.php?tambah=gagal');
}

?>