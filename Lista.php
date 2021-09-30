<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <?php
        include 'conexion.php';
    ?>
    <div class="container">
        <a class="btn btn-success" href="agregar.php">Nuevo</a>
        <table class="table">
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
                        <a class="btn btn-info" href="editar.php?id=<?php echo $filas['id']?>">Editar</a>
                        <a class="btn btn-danger" href="eliminar.php?id=<?php echo $filas['id']?>">Eliminar</a>
                    </td>
                </tr>
                <?php  } ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>