<!-- operadores lógicos se evalúan como valores booleanos -->
<?php

$edad = 20;
$cuidad = "colombia";

if ($edad >= 18 && $cuidad == "colombia") {
    echo "Puedes votar";
} else {
    echo "No puedes votar";
    
}

// // Ejemplos de operadores lógicos:

// VERDADERO || VERDADERO ; // Se evalúa como: VERDADERO     
// FALSO || VERDADERO ; // Se evalúa como: VERDADERO    
// VERDADERO && VERDADERO ; // Se evalúa como: VERDADERO      
// FALSO && VERDADERO ; // Se evalúa como: FALSO     
// ¡ VERDADERO ; // Se evalúa como: FALSO    
// ¡ FALSO ; // Se evalúa como VERDADERO   
// VERDADERO xor VERDADERO ; // Se evalúa como: FALSO     
// FALSO xor VERDADERO ; // Se evalúa como: VERDADERO 