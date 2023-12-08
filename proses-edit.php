<?php

include "koneksi.php";

$id = $_POST['id'];
$name = $_POST['name'];
$stock = $_POST['stock'];
$price = $_POST['price'];

$sql = "UPDATE barang SET name = '$name', stock = '$stock', price = '$price' WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);

if($query) {
    header('location:index.php?edit=sukses');
} else {
    header('location:index.php?edit=gagal');
}

?>