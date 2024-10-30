<?php
require_once __DIR__ . '/vendor/autoload.php';

use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 16); // Corregido para usar fuente Arial sin estilo
$pdf->Cell(40, 10, 'Hello World!');

// Configurar las cabeceras para la descarga del PDF
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="betis.pdf"');

// Salida del PDF al navegador
$pdf->Output('D', 'betis.pdf');
?>
