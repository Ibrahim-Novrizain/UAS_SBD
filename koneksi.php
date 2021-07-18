<?php 
$host       = "localhost";
$user       = "root";
$password   = "";
$database   ="ibrahim_311910485";

$koneksi    = mysqli_connect($host,$user,$password,$database);

if (mysqli_connect_errno($koneksi)) {
    echo "Gagal tersambung ke MYSQL" . mysqli_connect_errno();
}
