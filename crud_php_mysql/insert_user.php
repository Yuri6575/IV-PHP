<?php
include("conexion.php");
$con = conexion();

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users VALUES(NULL, '$name', '$last_name', '$username', '$password', '$email')";
$query = mysqli_query($con, $sql);

header("Location: index.php");
?>