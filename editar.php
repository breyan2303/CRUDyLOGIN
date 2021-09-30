<?php

include 'conexion.php';
$id=$_GET['id'];
$sql="select * from alumnos where id='".$id."'";
$resultado=mysqli_query($conexion,$sql);
    while ($fila=mysqli_fetch_assoc($resultado)){
    
?>
<div>
    <form>
    <input type="hide" name="txtid" value="<?php echo $fila['id'] ?>">
    <label>Nombre del Alumno</label><br>
    <input type="text" name="txtnombre" value="<?php echo $fila['nombre'] ?>"><br>
    <label>Correo del Alumno</label><br>
    <input type="text" name="txtcorreo" value="<?php echo $fila['correo'] ?>"><hr>
    <input type="submit" name="" value="Actualizar">
    <a href="Lista.php">Regresar</a>
    </form>
    <?php } ?>
</div>
<?php
    $id = $_GET['txtid']
    $nom = $_GET['txtnombre'];
    $cor = $_GET['txtcorreo'];

    if($nom!=null || $cor!=null){
        $sql2 = "update alumnos set nombre='".$nom."',correo='".$cor."' where id='".$id."'";
        mysqli_query($conexion,$sql2);
        if($nom=1){
            header("location:Lista.php");
        }
    }


?>