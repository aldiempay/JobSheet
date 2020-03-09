<?php
include 'koneksi.php';
  $nm_jur = $_POST[nm_jur];
  $kaprog = $_POST[kaprog];
//script validasi data
$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM jurusan WHERE nm_jur='$nm_jur'"));
if ($cek > 0){
echo "<script>window.alert('Data Sudah Tersedia')
window.location='jur.php'</script>";
}else {
mysqli_query($koneksi, "INSERT INTO jurusan VALUES('','$nm_jur','$kaprog')");
echo "<script>window.alert('DATA SUDAH DISIMPAN')
window.location='jur.php'</script>";
}

?>