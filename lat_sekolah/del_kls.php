<?php
include 'koneksi.php';
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM kelas WHERE id=$id") or die ("Gagal Perintah SQL".mysql_error());
echo "<script>window.alert('Data Telah Terhapus')
        window.location='kelas.php'</script>";
?>