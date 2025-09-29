<?php
echo "\n    /\ ";   
echo "\n   /  \ ";
echo "\n  /    \ ";
echo "\n /      \ ";
echo "\n/_ _  _ _\ ";
echo "\n   |  |";
echo "\n   |  |";
echo "\n   |  |";
echo "\n   |__|";
?>


<?php
$entero = 10;
$flotante = 1.3;
$miVariable = "Hola mundo"; //cadena
// $1miVariable = "Hola mundo"; //cadena
$boleano = true;
$array = array(1,2,3,4,5);


echo $entero;
echo $flotante;
echo $miVariable;
echo $boleano;
echo $array;
?>

<?php
$estudiantes=array("Juan", "Maria", "Pedro", "Ana", "Luis","Carlos", "Daniel","Jose", "Alix","josefina", "Andres", "Camila", 
"Fernando", "Luisa", "Miguel","Sofia", "Valentina", "Viviana", "Yessica", "Yuliana",);

echo count($estudiantes);

echo $estudiantes[0];
echo $estudiantes[1];
echo $estudiantes[2];
echo $estudiantes[3];
echo $estudiantes[4];
echo $estudiantes[5];
echo $estudiantes[6];
echo $estudiantes[7];
echo $estudiantes[8];
echo $estudiantes[9];
echo $estudiantes[10];
echo $estudiantes[11];
echo $estudiantes[12];
echo $estudiantes[13];
echo $estudiantes[14];
echo $estudiantes[15];
echo $estudiantes[16];
echo $estudiantes[17];
echo $estudiantes[18];
?>

<?php

$lista= array("nombre" => "Juan", "edad" => 30, "ciudad" => "Madrid", "email" => "juan@gmail.com", "telefono" => "5556677",
"direccion" => "Cll 25 # 15-2", "Casa" => "propia", "Trabajo" => "Independiente", "Hijos" => "2", "Mascotas" => "1",
"Deporte" => "bicicleta", "hobbies" => "Leer", "Musica" => "Rock", "Peliculas" => "Terror", "Comida" => "Ajiaco", "Viajes" => "Coveñas",
"hermanos" => "4", "primos" => "8", "transporte" => "carro", "finca" => "Los arrayanes");


echo $lista["nombre"];
echo "\n";
echo $lista["edad"];
echo "\n";
echo $lista["ciudad"];
echo "\n";
echo $lista["email"];
echo "\n";
echo $lista["telefono"];
echo "\n";
echo $lista["direccion"];
echo "\n";
echo $lista["Casa"];
echo "\n";
echo $lista["Trabajo"];
echo "\n";
echo $lista["Hijos"];
echo "\n";
echo $lista["Mascotas"];
echo "\n";
echo $lista["Deporte"];
echo "\n";
echo $lista["hobbies"];
echo "\n";
echo $lista["Musica"];
echo "\n";
echo $lista["Peliculas"];
echo $lista["Comida"];
echo "\n";
echo $lista["Viajes"];
echo "\n";
echo $lista["hermanos"];
echo "\n";
echo $lista["primos"];
echo "\n";
echo $lista["transporte"];
echo "\n";
echo $lista["finca"];
echo "\n";
?>

<!-- Oeraciones Aritmeticas -->
<?php
$a=46;
$b=127;
echo $a+$b;
echo "\n";
echo $a-$b;
echo "\n";
echo $a*$b;
echo "\n";
echo $a/$b;
echo "\n";
echo $a%$b;
echo "\n";
echo $a**$b;
echo "\n";
echo $a++;
echo "\n";
echo $a--;
echo "\n";
?>

<!-- array multidimensional -->
<?php
$lista= [["nombre" => "Yuri","edad" => 25],["nombre" => "Yuri","edad" => 27], ["nombre" => "Yuri","edad" => 30],["nombre" => "Yuri","edad" => 32],["nombre" => "Yuri","edad" => 22],["nombre" => "Yuri","edad" => 33],["nombre" => "Yuri","edad" => 35],["nombre" => "Yuri","edad" => 25],["nombre" => "Yuri","edad" => 36],["nombre" => "Yuri","edad" => 29],["nombre" => "Yuri","edad" => 34],["nombre" => "Yuri","edad" => 23],["nombre" => "Yuri","edad" => 20],["nombre" => "Yuri","edad" => 18],["nombre" => "Yuri","edad" => 42],["nombre" => "Yuri","edad" => 40],["nombre" => "Yuri","edad" => 39],["nombre" => "Yuri","edad" => 40],["nombre" => "Yuri","edad" => 45],["nombre" => "Yuri","edad" => 19]];

echo $lista[0]["nombre"].": tiene: ".$lista[0]["edad"]."años \n";
echo $lista[1]["nombre"].": tiene:  ".$lista[1]["edad"]."años \n";
echo $lista[2]["nombre"].": tiene:  ".$lista[2]["edad"]."años \n";
echo $lista[3]["nombre"].": tiene:  ".$lista[3]["edad"]."años \n";
echo $lista[4]["nombre"].": tiene:  ".$lista[4]["edad"]."años \n";
echo $lista[5]["nombre"].": tiene:  ".$lista[5]["edad"]."años \n";
echo $lista[6]["nombre"].": tiene:  ".$lista[6]["edad"]."años \n";
echo $lista[7]["nombre"].": tiene:  ".$lista[7]["edad"]."años \n";
echo $lista[8]["nombre"].": tiene:  ".$lista[8]["edad"]."años \n";
echo $lista[9]["nombre"].": tiene:  ".$lista[9]["edad"]."años \n";
echo $lista[10]["nombre"].": tiene:  ".$lista[10]["edad"]."años \n";
echo $lista[11]["nombre"].": tiene:  ".$lista[11]["edad"]."años \n";
echo $lista[12]["nombre"].": tiene:  ".$lista[12]["edad"]."años \n";
echo $lista[13]["nombre"].": tiene:  ".$lista[13]["edad"]."años \n";
echo $lista[14]["nombre"].": tiene:  ".$lista[14]["edad"]."años \n";
echo $lista[15]["nombre"].": tiene:  ".$lista[15]["edad"]."años \n";
echo $lista[16]["nombre"].": tiene:  ".$lista[16]["edad"]."años \n";
echo $lista[17]["nombre"].": tiene:  ".$lista[17]["edad"]."años \n";
echo $lista[18]["nombre"].": tiene:  ".$lista[18]["edad"]."años \n";
echo $lista[19]["nombre"].": tiene:  ".$lista[19]["edad"]."años \n";
echo $lista[20]["nombre"].": tiene:  ".$lista[20]["edad"]."años \n";
?>


<!-- contador -->
<?php
$estudiantes=array("Juan", "Maria", "Pedro", "Ana", "Luis","Carlos", "Daniel","Jose", "Alix","josefina", "Andres", "Camila", 
"Fernando", "Luisa", "Miguel","Sofia", "Valentina", "Viviana", "Yessica", "Yuliana",);

echo count($estudiantes); //cuenta los elementos del array
echo empty($estudiantes);    //verifica si el array esta vacio
?>

require once