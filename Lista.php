<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <?php
        include 'conexion.php';
    ?>
    <div>
        <a href="agregar.php">Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de Alumno</th>
                    <th>Correo del Alumno</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($filas=mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    <td><?php echo $filas['id']?></td>
                    <td><?php echo $filas['nombre']?></td>
                    <td><?php echo $filas['correo']?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $filas['id']?>">Editar</a>
                        <a href="">Eliminar</a>
                    </td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>