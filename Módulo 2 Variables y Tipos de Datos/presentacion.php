<?php
// Presentación personal del estudiante
$nombre = "Yuri Beltrán";
$edad = 29;
$carrera = "ADSO";
$semestre = 3;
$universidad = "SENA centro de Biotecnologia Agropecuria";

echo "=== DATOS DEL ESTUDIANTE ===\n";
echo "Nombre: $nombre\n";
echo "Edad: $edad años\n";
echo "Carrera: $carrera\n";
echo "Semestre: $semestre\n";
echo "Universidad: $universidad\n\n";

// Notas del estudiante en diferentes materias
$nota_matematicas = 7.5;
$nota_programacion = 8.0;
$nota_bases_datos = 7.8;
$nota_redes = 6.5;
$nota_etica = 8.0;

echo "=== NOTAS ACADÉMICAS ===\n";
echo "Matemáticas: $nota_matematicas\n";
echo "Programación: $nota_programacion\n";
echo "Bases de Datos: $nota_bases_datos\n";
echo "Redes: $nota_redes\n";
echo "Ética: $nota_etica\n\n";

// Operaciones aritméticas para calcular promedios
$suma_notas = $nota_matematicas + $nota_programacion + $nota_bases_datos + $nota_redes + $nota_etica;
$cantidad_materias = 5;
$promedio = $suma_notas / $cantidad_materias;


echo "=== PROMEDIO ACADÉMICO ===\n";
echo "Promedio: $promedio\n\n";

// Determinar si aprobó (considerando 6 como nota mínima)
$aprobado = $promedio >= 6.0;

// Mostrar resultados en consola
echo "=== RESULTADO FINAL ===\n";
echo "Aprobado: ";
if ($aprobado) {
    echo "Sí";
} else {
    echo "No";
}
echo "\n";

?>