<?php
include 'config/koneksi.php';
if (isset($_POST['register'])) {
    
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    mysqli_query($conn, "Insert INTO user VALUES('', ' $username','$password')");

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>