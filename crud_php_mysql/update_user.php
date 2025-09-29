<?php
include("conexion.php");
$con = conexion();

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE ID='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<form action="edit_user.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
    <input type="text" name="name" value="<?php echo $row['name'] ?>" required>
    <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>" required>
    <input type="text" name="username" value="<?php echo $row['username'] ?>" required>
    <input type="password" name="password" value="<?php echo $row['password'] ?>" required>
    <input type="email" name="email" value="<?php echo $row['email'] ?>" required>
    <input type="submit" value="Actualizar">
</form>