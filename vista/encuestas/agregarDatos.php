<?php
/* require_once "../../datos/Conexion.php"; */
Conexion::conectar();
$estado="anzoategui";
$municipios=$_POST['municipios'];
$sector=$_POST['sector'];
$nombre_comunidad=$_POST['nombre_comunidad'];
$nombre_indigena=$_POST['nombre_indigena'];
$grupo=$_POST['grupo'];


$sql="INSERT into distribucion_geografica (estado,	municipios,	parroquias,	sector,	nombre_comunidad,	nombre_indigena,	grupo
)
                            values ('$estado','$municipios','$sector','$nombre_comunidad','$nombre_indigena','$grupo')";
echo $result=mysqli_query($conexion,$sql);


?>