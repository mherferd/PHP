<?php

require  '../../../vendor/autoload.php';

use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Hello World!'); 


header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="betis.pdf"');
$pdf->Output('I', 'betis.pdf'); 

?>