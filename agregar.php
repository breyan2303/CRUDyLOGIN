<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

    <div class="card-body">
    <form method="POST">
    <label class="form-label">Nombre del Alumno</label><br>
    <input class="form-control" type="text" name="txtnombre"><br>
    <label class="form-label">Correo del Alumno</label><br>
    <input class="form-control" type="text" name="txtcorreo"><hr>
    <input class="btn btn-success" type="submit" name="" value="Agregar">
    <a class="btn btn-danger" href="Lista.php">Regresar</a>
    </form>
    </div>

    <?php
    include 'conexion.php';
    $nom = $_POST['txtnombre']?? null; 
    $cor = $_POST['txtcorreo']?? null;

    if($nom!=null || $cor!=null){

        $sql = "insert into alumnos(nombre,correo)values('".$nom."','".$cor."')";
        mysqli_query($conexion,$sql);
        if($nom=1){
            header("location:Lista.php");
        }
    }

    ?>
</body>
</html>