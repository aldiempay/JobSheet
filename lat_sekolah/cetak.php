<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SMK LUGINA RANCAEKEK',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIS',1,0);
$pdf->Cell(40,6,'Nama',1,0);
$pdf->Cell(27,6,'Jenis Kelamin',1,0);
$pdf->Cell(25,6,'Agama',1,0);
$pdf->Cell(30,6,'Tangggal Lahir',1,0);
$pdf->Cell(30,6,'Foto',1,1);


$pdf->SetFont('Arial','',10);
$koneksi = mysqli_connect("localhost","root","","db_sekolah");

$data = mysqli_query($koneksi,"SELECT * from siswa");
while ($row = mysqli_fetch_array($data)){
    $pdf->Cell(20,6,$row['nis'],1,0);
    $pdf->Cell(40,6,$row['nama'],1,0);
    $pdf->Cell(27,6,$row['jk'],1,0);
	$pdf->Cell(25,6,$row['agama'],1,0);
	$pdf->Cell(30,6,$row['tgl_lahir'],1,0);
	$gambar=$row['foto'];
	$pdf->Image('img/' . $gambar,140,140,50,30);

	

	

}

$pdf->Output();
?>