<?php

session_start();

if($_SESSION['status'] != 'login') {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome <?= $_SESSION['name'] ?></h1>
    <a href="logout.php"><button>Logout</button></a>
</body>
</html>