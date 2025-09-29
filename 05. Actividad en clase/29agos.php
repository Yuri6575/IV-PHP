<?php
$miLista = ["manzana", 25, "banana", 42, "naranja", 18, "pera", 33, "uva", 7];
echo $miLista[0];
echo $miLista[1];
echo $miLista[2];
echo $miLista[3];
echo $miLista[4];
echo $miLista[5];

?>

<?php

// Un array asociativo en PHP es un tipo de array donde cada valor está asociado a una clave específica
$diccionario = [
    "nombre" => "María",
    "edad" => 28,
    "ciudad" => "Madrid",
    "email" => "maria@email.com",
    "activo" => true
];

echo $diccionario["nombre"]= "Juan";

// Verificamos si la clave "nombre" existe
var_dump(array_key_exists("nombre", $diccionario));

// También podemos usar isset() que es más común para esto
var_dump(isset($usuario["nombre"]));

// Accede directamente al array - Pero verifica antes para evitar errores
$consulta = $diccionario["nombre"];
echo $consulta;

// Accede al primer valor del nuevo array indexado.
$valores = array_values($diccionario);
echo $valores[0];

?>

<!-- Multidimesionales -->
<!-- Los arrays multidimensionales son arrays que contienen otros arrays como elementos -->

<?php
$multidimensional = [[2,4,5], [3,6,7]];
echo $multidimensional = [0];
?>

<?php
$multidimensional = [
    ["nombre" => "María", "edad" => 28],
    ["nombre" => "Juan", "edad" => 32],
    ["nombre" => "Ana", "edad" => 25]
];
echo $multidimensional[0]["nombre"];
echo $multidimensional[1]["nombre"];
echo $multidimensional[2]["nombre"];
echo $multidimensional[3]["nombre"];
echo $multidimensional[4]["nombre"];
?>

<?php

$lista1 = ["rojo", "amarillo", "azul", "verde", "morado"];
$lista2 = [25, 42, 18, 33, 15 ];
    
$cantidad = count($lista1);
echo $cantidad;

$cantidad = count($lista2);
echo $cantidad;



// <!-- Comprueba si un valor existe en un array. Devuelve true o false. -->

$cantidad = in_array("rojo", $lista1);

var_dump($cantidad);

$cantidad = in_array("17", $lista2);

var_dump($cantidad);

?>

