<?php
require_once 'vendor/autoload.php';
$pdf = new TCPDF();
$pdf->AddPage();
// === ENCABEZADO ===
// Logo (si tienes uno)
// $pdf->Image('logo.png', 10, 10, 30, 15);
// Datos de la empresa
$pdf->SetXY(120, 10);
$pdf->SetFont('helvetica', 'B', 14);
$pdf->Write(0, 'MI EMPRESA S.A.');
$pdf->SetXY(120, 18);
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'RFC: XAXX010101000');
$pdf->SetXY(120, 25);
$pdf->Write(0, 'Tel: (555) 123-4567');
$pdf->SetXY(120, 32);
$pdf->Write(0, 'email@empresa.com');
// Título FACTURA
$pdf->SetXY(10, 45);
$pdf->SetFont('helvetica', 'B', 20);
$pdf->SetTextColor(0, 0, 150);
$pdf->Write(0, 'FACTURA');
// Número de factura y fecha
$pdf->SetXY(120, 45);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->Write(0, 'No. FAC-001');
$pdf->SetXY(120, 53);
$pdf->SetFont('helvetica', '', 10);
$pdf->Write(0, 'Fecha: ' . date('d/m/Y'));
// Línea separadora
$pdf->SetDrawColor(0, 0, 150);
$pdf->SetLineWidth(1);
$pdf->Line(10, 65, 200, 65);
// === DATOS DEL CLIENTE ===
$pdf->SetXY(10, 75);
$pdf->SetFont('helvetica', 'B', 12);
$pdf->Write(0, 'FACTURAR A:');
$pdf->SetXY(10, 85);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell(90, 5, "Juan Pérez García\nRFC: PEGJ800101ABC\nCalle Falsa
123\nCiudad, Estado, CP 12345\nTel: (555) 987-6543", 1, 'L');
// === TABLA DE PRODUCTOS ===
$y_tabla = 120;
$pdf->SetXY(10, $y_tabla);
// Encabezados de tabla
$pdf->SetFont('helvetica', 'B', 10);
$pdf->SetFillColor(200, 220, 255);
$pdf->Cell(80, 8, 'DESCRIPCIÓN', 1, 0, 'C', true);
$pdf->Cell(20, 8, 'CANT.', 1, 0, 'C', true);
$pdf->Cell(30, 8, 'PRECIO', 1, 0, 'C', true);
$pdf->Cell(30, 8, 'IMPORTE', 1, 1, 'C', true);
// Productos
$pdf->SetFont('helvetica', '', 9);
$productos = [
['Laptop HP Pavilion 15"', 1, 15000.00],
['Mouse Inalámbrico Logitech', 2, 450.00],
['Teclado Mecánico RGB', 1, 1200.00]
];
$subtotal = 0;
foreach($productos as $producto) {
$importe = $producto[1] * $producto[2];
$subtotal += $importe;
$pdf->Cell(80, 8, $producto[0], 1, 0, 'L');
$pdf->Cell(20, 8, $producto[1], 1, 0, 'C');
$pdf->Cell(30, 8, '$' . number_format($producto[2], 2), 1, 0, 'R');
$pdf->Cell(30, 8, '$' . number_format($importe, 2), 1, 1, 'R');
}
// === TOTALES ===
$iva = $subtotal * 0.16;
$total = $subtotal + $iva;
$pdf->Ln(5);
$pdf->SetFont('helvetica', 'B', 10);
// Subtotal
$pdf->Cell(130, 8, 'SUBTOTAL:', 0, 0, 'R');
$pdf->Cell(30, 8, '$' . number_format($subtotal, 2), 1, 1, 'R');
// IVA
$pdf->Cell(130, 8, 'IVA (16%):', 0, 0, 'R');
$pdf->Cell(30, 8, '$' . number_format($iva, 2), 1, 1, 'R');
// Total
$pdf->SetFillColor(255, 255, 0);
$pdf->Cell(130, 10, 'TOTAL:', 1, 0, 'R', true);
$pdf->Cell(30, 10, '$' . number_format($total, 2), 1, 1, 'R', true);
// === PIE DE PÁGINA ===
$pdf->SetXY(10, 250);
$pdf->SetFont('helvetica', 'I', 8);
$pdf->SetTextColor(100, 100, 100);
$pdf->Write(0, 'Gracias por su preferencia. Esta factura fue generada
automáticamente.');
$pdf->Output('factura_completa.pdf', 'I');
<?php