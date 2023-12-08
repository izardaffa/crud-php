<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "belajar_koding";

$koneksi = mysqli_connect($server, $username, $password, $database);

if(!$koneksi) {
    echo "Database not connected.";
}

?>