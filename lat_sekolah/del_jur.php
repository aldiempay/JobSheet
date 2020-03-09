<?php
include 'koneksi.php';
// menangkap data id yang di kirim dari url
$id_jur = $_GET['id_jur'];

// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM jurusan WHERE id_jur=$id_jur") or die ("Gagal Perintah SQL".mysql_error());
echo "<script>window.alert('Data Telah Terhapus')
        window.location='jur.php'</script>";
?>