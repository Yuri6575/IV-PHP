<?php
include("conexion.php");
$con = conexion();

$id = $_POST['id'];
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "UPDATE users SET name='$name', last_name='$last_name', 
        username='$username', password='$password', email='$email' 
        WHERE ID='$id'";
$query = mysqli_query($con, $sql);

header("Location: index.php");
?>