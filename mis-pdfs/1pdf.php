<?php
require __DIR__ .'/vendor/autoload.php'; // Asegúrate de que la ruta al archivo sea correcta

// Configurar la zona horaria (ejemplo: América/bogota)
date_default_timezone_set('America/Bogota');

// Crear nuevo documento PDF
$pdf = new TCPDF();
// Agregar una página
$pdf->AddPage();

// Título principal
$pdf->SetFont('helvetica', 'B', 20);
$pdf->Cell(0, 15, 'Puro_Campo proyecto sitematizacion Bovina PDF', 0, 1, 'C');

// Establecer fuente
$pdf->SetFont('times', '', 12);

// Contenido normal
$pdf->SetFont('times', '', 12);
$pdf->Write(0, 'Este documento fue generado automáticamente.');
$pdf->Ln(8);
$pdf->Write(0, 'Fecha: ' . date('d/m/Y H:i:s'));
$pdf->Ln(8);
$pdf->Write(0, 'Este es un ejemplo de un documento PDF generado con PHP y la biblioteca TCPDF.');

// Procesar internamente
$contenido = $pdf->Output('', 'S');
echo 'Tamaño: ' . strlen($contenido);

?>
