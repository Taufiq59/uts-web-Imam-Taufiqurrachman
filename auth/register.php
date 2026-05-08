
<?php
// mengambil file koneksi database

include 'config/koneksi.php';
 //isset digunakan untuk mengecek 
 //apakah tombol register di tekan 
if (isset($_POST['register'])) {
    
    // Mengambil data dari input from 
    $username = $_POST['username'];

    //md5 digunakan untuk mengenkripsi password
    $password = md5($_POST['password']);

    mysqli_query($conn, "Insert INTO user VALUES('', ' $username','$password')");

    //setelah berhasil register
    //pindah ke halaman login 

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