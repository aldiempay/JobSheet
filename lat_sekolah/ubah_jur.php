<?php
include 'koneksi.php';
if(isset($_POST['simpan_jur'])){
  $id_jur=$_POST['id_jur'];
  $nm_jur = $_POST['nm_jur'];
  $kaprog = $_POST['kaprog'];
//script validasi data
$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM jurusan WHERE nm_jur='$nm_jur'"));
if ($cek > 0){
echo "<script>window.alert('Data Sudah Tersedia')
window.location='jur.php'</script>";
}else {
mysqli_query($koneksi,"UPDATE jurusan SET id_jur='$id_jur',nm_jur='$nm_jur',kaprog='$kaprog' WHERE id_jur='$id_jur'");
echo "<script>window.alert('DATA SUDAH DISIMPAN')
window.location='jur.php'</script>";
}
}
?>