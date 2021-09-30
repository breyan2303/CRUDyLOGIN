<div>
    <form method="GET">
    <label>Nombre del Alumno</label><br>
    <input type="text" name="txtnombre"><br>
    <label>Correo del Alumno</label><br>
    <input type="text" name="txtcorreo"><hr>
    <input type="submit" name="" value="Agregar">
    <a href="Lista.php">Regresar</a>
    </form>
</div>

<?php
    include 'conexion.php';
    $nom = $_GET['txtnombre'];
    $cor = $_GET['txtcorreo'];

    if($nom!=null || $cor!=null){

        $sql = "insert into alumnos(nombre,correo)values('".$nom."','".$cor."')";
        mysqli_query($conexion,$sql);
        if($nom=1){
            header("location:Lista.php");
        }
    }

?>