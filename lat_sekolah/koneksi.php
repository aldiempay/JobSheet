<?php
$koneksi = mysqli_connect (
    "localhost","root","","db_sekolah");
if (!$koneksi){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>