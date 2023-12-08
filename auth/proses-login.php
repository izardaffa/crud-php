<?php

include "koneksi.php";

session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$query = mysqli_query($koneksi, $sql);

while($user = mysqli_fetch_assoc($query)) {
    $id = $user['id'];
    $name = $user['name'];
}

if(mysqli_num_rows($query) > 0) {
    $_SESSION['status'] = "login";
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    header("location:index.php?login=sukses");
} else {
    echo "<script>alert('Email dan Password tidak cocok!'); history.back();</script>";
}

?>