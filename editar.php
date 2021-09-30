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
$id=$_GET['id'];
$sql="select * from alumnos where id='".$id."'";
$resultado=mysqli_query($conexion,$sql);
    while ($fila=mysqli_fetch_assoc($resultado)){
    
?>

<div class="card-body">
    <form action="" method="POST">
    <input type="hidden" name="txtid" value="<?php echo $fila['id'] ?>">
    <label class="form-label" >Nombre del Alumno</label><br>
    <input class="form-control" type="text" name="nombre" value="<?php echo $fila['nombre'] ?>"><br>
    <label class="form-label" >Correo del Alumno</label><br>
    <input class="form-control"type="text" name="correo" value="<?php echo $fila['correo'] ?>"><hr>
    <input class="btn btn-success" type="submit" name="" value="Actualizar">
    <a  class="btn btn-danger" href="Lista.php">Regresar</a>
    </form>
    <?php } ?>
</div>
<?php
    $idAlumno = $_POST["txtid"]?? null;
    $nombreA = $_POST["nombre"]?? null;
    $correoA = $_POST["correo"]?? null;

    if($nombreA!=null || $correoA!=null){
        $sql2 = "update alumnos set nombre='".$nombreA."',correo='".$correoA."' where id='".$idAlumno."'";
        mysqli_query($conexion,$sql2);
        if($nom=1){
            header("location:Lista.php");
        }
    }


?>
</body>
</html>