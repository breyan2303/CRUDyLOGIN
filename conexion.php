<?php

$conexion=mysqli_connect("localhost","root","","registroa");

$consulta="SELECT*FROM alumnos";

$resultado=mysqli_query($conexion,$consulta);
?>