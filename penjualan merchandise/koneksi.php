<?php

$host="localhost";
$user="root";
$password="";
$db="penjualan_merchandise";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
    die("koneksi gagal :".mysqli_connect_error());
}
?>