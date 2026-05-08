<?php
session_start();
include 'config/koneksi.php';
if (isset($_POST['login'])){
    

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $data = mysql_query($sconn,"SELECT * FROM user WHERE username = '$username' AND password= '$password'");
    $cek = mysql_num_rows($data);
    if ($cek > 0 ){
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");   
    } else {
        echo"<script>alert('login gagal')</script>";

    }
}