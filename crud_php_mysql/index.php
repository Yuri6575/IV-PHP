<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema CRUD - Gestión de Usuarios</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Formulario para crear usuarios -->
    <div class="users-form">
        <h1>Crear Nuevo Usuario</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="text" name="last_name" placeholder="Apellidos" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="submit" value="Agregar Usuario">
        </form>
    </div>

    <!-- Tabla para mostrar usuarios -->
    <div class="users-table">
        <h2>Usuarios Registrados</h2>
        <table>
            <tr>
                <th>ID</th><th>Nombre</th><th>Apellidos</th>
                <th>Username</th><th>Password</th><th>Email</th>
                <th>Editar</th><th>Eliminar</th>
            </tr>
            <?php
            include("conexion.php");
            $con = conexion();
            $sql = "SELECT * FROM users";
            $query = mysqli_query($con, $sql);
            
            while($row = mysqli_fetch_array($query)) {
                echo "<tr>
                    <td>{$row['ID']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['last_name']}</td>
                    <td>{$row['username']}</td>
                    <td>{$row['password']}</td>
                    <td>{$row['email']}</td>
                    <td><a href='update_user.php?id={$row['ID']}'>Editar</a></td>
                    <td><a href='delete_user.php?id={$row['ID']}'>Eliminar</a></td>
                </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>