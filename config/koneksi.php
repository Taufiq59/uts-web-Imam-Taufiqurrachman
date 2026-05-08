<?php
$conn = mysql_connect("localhost","root","","inventaris_gudang");
if (!$conn){
    die("koneksi gagal : ".mysql_connect_eror());
}
?>