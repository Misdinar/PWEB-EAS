<?php
//include connection file
include_once("config.php");
include_once('libs/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../img/logo.png',10,-1,30);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Jadwal Mata Pelajaran',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$display_heading = array('id' => 'ID', 'mapel'=> 'Mata Pelajaran','jam'=> 'Jam', 'hari'=> 'Hari', 'kode_guru' => 'Kode Guru');
 
$result = mysqli_query($koneksi, "SELECT id, mapel, jam, hari, kode_guru FROM jadwal") or die("database error:". mysqli_error($koneksi));
$header = mysqli_query($koneksi, "SHOW columns FROM jadwal");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
$pdf->Output();
?>