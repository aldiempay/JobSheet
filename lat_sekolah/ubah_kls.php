<?php
include 'koneksi.php';
if(isset($_POST['simpan_kls'])){
  $id=$_POST['id'];
  $nm_kelas = $_POST[nm_kelas];
  $tingkat = $_POST[tingkat];
  $id_jur = $_POST[id_jur];
//script validasi data
$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM kelas WHERE nm_kelas='$nm_kelas'"));
if ($cek > 0){
echo "<script>window.alert('Data Sudah Tersedia')
window.location='siswa.php'</script>";
}else {
mysqli_query($koneksi,"UPDATE kelas SET id='$id',nm_kelas='$nm_kelas',tingkat='$tingkat',id_jur='$id_jur' WHERE id='$id'");
echo "<script>window.alert('DATA SUDAH DISIMPAN')
window.location='kelas.php'</script>";
}
}
?>