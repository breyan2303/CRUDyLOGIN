<?php

include 'conexion.php';

$idAlumnos = $_POST['id']?? null;

$sql = "DELETE FROM `alumnos` WHERE id = $idAlumnos";

mysqli_query($conexion,$sql);

header("location:Lista.php");

?>