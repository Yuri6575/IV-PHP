<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Gráficos</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .dashboard {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .chart-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .chart-full {
            grid-column: 1 / -1;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .color-palette {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .color-box {
            width: 20px;
            height: 20px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <h1>Dashboard de Gráficos con PHP y Chart.js</h1>
    
    <div class="color-palette">
        <div class="color-box" style="background-color: #C7A2AC;"></div>
        <div class="color-box" style="background-color: #D7EEFE;"></div>
        <div class="color-box" style="background-color: #F9E0C0;"></div>
        <div class="color-box" style="background-color: #824E5C;"></div>
        <div class="color-box" style="background-color: #A06273;"></div>
    </div>
    
    <div class="dashboard">
        <div class="chart-container">
            <h2>Ventas Mensuales</h2>
            <canvas id="ventasMensuales"></canvas>
        </div>
        
        <div class="chart-container">
            <h2>Distribución de Ventas por Producto</h2>
            <canvas id="distribucionProductos"></canvas>
        </div>
        
        <div class="chart-container chart-full">
            <h2>Evolución de Usuarios Registrados</h2>
            <canvas id="evolucionUsuarios"></canvas>
        </div>
    </div>

    <?php
    // Datos para los gráficos
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];
    $ventas = [2500, 3200, 2800, 4100, 3800, 4500];
    
    $productos = [
        'iPhone' => 35,
        'Samsung' => 28,
        'Xiaomi' => 18,
        'Huawei' => 12,
        'Otros' => 7
    ];
    
    $periodo = ['Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    $usuarios = [1200, 1800, 2400, 3200, 4100, 5300];
    
    // Preparar datos para JavaScript
    $etiquetasProductos = array_keys($productos);
    $valoresProductos = array_values($productos);
    $colores = ["#C7A2AC", "#D7EEFE", "#F9E0C0", "#824E5C", "#A06273"];
    ?>

    <script>
        // Gráfico de barras - Ventas mensuales
        new Chart(document.getElementById('ventasMensuales'), {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($meses); ?>,
                datasets: [{
                    label: 'Ventas ($)',
                    data: <?php echo json_encode($ventas); ?>,
                    backgroundColor: '#C7A2AC',
                    borderColor: '#824E5C',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Ventas Mensuales 2024'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Gráfico circular - Distribución de productos
        new Chart(document.getElementById('distribucionProductos'), {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($etiquetasProductos); ?>,
                datasets: [{
                    data: <?php echo json_encode($valoresProductos); ?>,
                    backgroundColor: <?php echo json_encode($colores); ?>,
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.label + ': ' + context.parsed + '%';
                            }
                        }
                    }
                }
            }
        });

        // Gráfico de línea - Evolución de usuarios
        new Chart(document.getElementById('evolucionUsuarios'), {
            type: 'line',
            data: {
                labels: <?php echo json_encode($periodo); ?>,
                datasets: [{
                    label: 'Usuarios Registrados',
                    data: <?php echo json_encode($usuarios); ?>,
                    borderColor: "#C7A2AC",
                    backgroundColor: 'rgba(199, 162, 172, 0.2)',
                    fill: true,
                    tension: 0.3,
                    pointBackgroundColor: '#824E5C',
                    pointBorderColor: '#ffffff',
                    pointBorderWidth: 2,
                    pointRadius: 5
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Crecimiento de Usuarios - Últimos 6 Meses'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.1)'
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>