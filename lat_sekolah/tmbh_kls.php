<?php
include 'koneksi.php';
  $nm_kelas = $_POST[nm_kelas];
  $id_jur = $_POST[id_jur];
  $tingkat = $_POST[tingkat];
//script validasi data
$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM kelas WHERE nm_kelas='$nm_kelas'"));
if ($cek > 0){
echo "<script>window.alert('Data Sudah Tersedia')
window.location='siswa.php'</script>";
}else {
mysqli_query($koneksi,"INSERT INTO kelas VALUES('','$nm_kelas','$id_jur','$tingkat')");
echo "<script>window.alert('DATA SUDAH DISIMPAN')
window.location='kelas.php'</script>";
}

?>