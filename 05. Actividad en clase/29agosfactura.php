<?php
// Datos de la empresa
$empresa = [
    'nombre' => 'Lecheria SC S.A.',
    'Nit' => '901.555.555-5',
    'direccion' => 'Km 3 Finca Santa Cecilia ',
    'ciudad' => 'Madrid Cund.',
    'telefono' => '315 555 5555',
    'email' => 'info@lecheriasc.com'
];

// Datos del cliente
$cliente = [
    'nombre' => 'Juan Pérez García',
    'direccion' => 'Cll 7 e sur 32-15',
    'ciudad' => 'Madrid Cund.',
    'Nit' => '19452631',
    'email' => 'juan.perez@email.com'
];

// Datos de la factura
$factura = [
    'numero' => 'LSC-001',
    'fecha' => date('d/m/Y'),
    'fecha_vencimiento' => date('d/m/Y', strtotime('+30 days'))
];

// Productos
$productos = [
    [
        'descripcion' => 'Leche Entera',
        'cantidad' => 2,
        'unidad' => 'lt',
        'precio_unitario' => 3000,
        'iva' => 19
    ],
    [
        'descripcion' => 'Queso Doble Crema',
        'cantidad' => 500,
        'unidad' => 'gr',
        'precio_unitario' => 30000,
        'iva' => 0
    ],
    [
        'descripcion' => 'Yogurt Natural',
        'cantidad' => 10,
        'unidad' => 'lt',
        'precio_unitario' => 4800,
        'iva' => 19
]
];

// Calcular totales
$subtotal = 0;
$total_iva = 0;
foreach ($productos as $producto) {
    $importe = $producto['cantidad'] * $producto['precio_unitario'];
    $subtotal += $importe;
    $total_iva += $importe * ($producto['iva'] / 100);
}

// Para mostrar la información correctamente:
foreach ($productos as $producto) {
    $importe = $producto['cantidad'] * $producto['precio_unitario'];
    echo "{$producto['descripcion']}: ";
    echo "{$producto['cantidad']} {$producto['unidad']} x ";
    echo number_format($producto['precio_unitario'], 2) . " € = ";
    echo number_format($importe, 2) . " € (IVA {$producto['iva']}%)<br>";
}
?>
