<?php
function conexion(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "crud";
    
    $connect = mysqli_connect($host, $user, $password, $bd);
    return $connect;
}
?>
<?php
include("conexion.php");
$con = conexion();

if ($con) {
    echo "✅ Conexión exitosa a la base de datos";
} else {
    echo "❌ Error de conexión: " . mysqli_connect_error();
}
?>