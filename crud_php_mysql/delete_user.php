<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE ID='$id'";
$query = mysqli_query($con, $sql);

header("Location: index.php");
?>