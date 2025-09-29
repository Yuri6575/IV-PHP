<?php
require __DIR__ .'/vendor/autoload.php'; 
// Asegúrate de que la ruta al archivo sea correcta

// Crear nuevo documento PDF
$pdf = new TCPDF();

// Agregar una página
$pdf->AddPage();

// Establecer fuente
$pdf->SetFont('helvetica', '', 12);

// Escribir texto
$pdf->Write(0, '¡Hola Mundo desde PHP!');

// Mostrar el PDF en el navegador
$pdf->Output('mi_primer_pdf.pdf', 'I');
?>
