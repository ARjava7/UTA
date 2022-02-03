<?php
require('../fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(20,10,'Reporte Estudiantes',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(153,10,'Cedula        Nombre       Apellido      Direccion       Telefono',0,0,'C');
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',80);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada

require '../models/conexion.php';
$consulta = "SELECT * FROM estudiantes";
$res =$mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
while($row = $res->fetch_assoc()){
    $pdf->Cell(30,10,$row['est_cedula'],1,0,'C',0);
    $pdf->Cell(30,10,$row['est_nombre'],1,0,'C',0);
    $pdf->Cell(30,10,$row['est_apellido'],1,0,'C',0);
    $pdf->Cell(30,10,$row['est_direccion'],1,0,'C',0);
    $pdf->Cell(30,10,$row['est_telefono'],1,1,'C',0);

}
$pdf->Output();
?>