<?php

include "koneksi.php";

$id = $_GET['id'];
$sql = "DELETE FROM barang WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql);

if($query) {
    header('location:index.php?hapus=sukses');
} else {
    header('location:index.php?gagal=sukses');
}

?>