<?php

include "koneksi.php";

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql_check_email = "SELECT * FROM user WHERE email = '$email'";
$query_check_email = mysqli_query($koneksi, $sql_check_email);

while($user = mysqli_fetch_assoc($query_check_email)) {
    $id = $user['id'];
    $name = $user['name'];
}

if(mysqli_num_rows($query_check_email) > 0) {
    echo "<script>alert('Email sudah pernah digunakan!'); history.back();</script>";
} else {
    $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', md5('$password'))";
    $query = mysqli_query($koneksi, $sql);

    if($query) {
        $_SESSION['status'] = "login";
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $name;
        header("location:index.php?register=sukses_auto_login");
    } else {
        header("location:register.php?register=gagal");
    }
}

?>