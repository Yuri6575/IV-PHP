<?php
function conectar (){
$host = "localhost";
$puerto = "3306"; 
$database = "classagro";
$user = "root"; // root = mysql
$password = " ";

$cadenaConexion = "host = $host port = $puerto dbname = $database user = $user password = $password";

$conexion = pg_connect($cadenaConexion);

	if (!$conexion){
		die("error de conexion" . pg_last_error());
		return $conexion;
	}

function desconectar ($conexion){
	pg_close($conexion);
}
return $conexion;
}