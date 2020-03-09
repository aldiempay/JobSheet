<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 style="text-align: center;">Data Siswa </h1>	
		<table border="1">
			<tr>
				<th>NO</th>
				<th>Kelas</th>
				<th>jurusan</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Gender</th>
				<th>TTL</th>
				<th>Agama</th>
				<th>Alamat</th>
				<th>Nama Orangtua</th>
				<th>Alamat Orangtua</th>
				<th>Foto</th>
			</tr>';

					
                           

		include "koneksi.php";
		$id=$_GET["id"];
		$no =1;

		$query = "SELECT siswa.id_siswa,siswa.nis,siswa.foto,siswa.nama,siswa.jk, siswa.agama, siswa.tgl_lahir,siswa.tmpt_lahir,siswa.alamat,siswa.nm_ortu,siswa.alamat_ortu,siswa.foto,siswa.id_kelas,kelas.nm_kelas,kelas.tingkat,kelas.id_jur,jurusan.nm_jur,jurusan.kaprog FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id INNER JOIN jurusan ON kelas.id_jur=jurusan.id_jur where id=$id ";
		$sql = mysqli_query($koneksi, $query);

		while($data = mysqli_fetch_array($sql)){
			$html .='<tr>
				<td>'. $no++.'</td>
				<td>'. $data["tingkat"].$data["nm_kelas"].'</td>
				<td>'. $data["nm_jur"].'</td>
				<td>'. $data["nis"].'</td>
				<td>'. $data["nama"].'</td>
				<td>'. $data["jk"].'</td>
				<td>'. $data["tgl_lahir"].'</td>
				<td>'. $data["agama"].'</td>
				<td>'. $data["alamat"].'</td>
				<td>'. $data["nm_ortu"].'</td>
				<td>'. $data["alamat_ortu"].'</td>
				"<td><img src="images/'.$data["foto"].'" width="50" height="50"></td>

			</tr>';
		}
$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();
?>
