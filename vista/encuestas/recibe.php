<?php

/* header("location:Vista_1.php"); */ 
$municipios = $_POST["municipios"];
$parroquias = $_POST["parroquias"];
$sector = $_POST["sector"];
$nombre_comunidad = $_POST["nombre_comunidad"];
$nombre_indigena = $_POST["nombre_indigena"];
$grupo = $_POST["grupo"];
if($municipios==3){
    $municipios="Diego Bautista Urbaneja";
}

echo "Municipio: ".$municipios."<br>"."Parroquia: ".$parroquias."<br>"."Sector: ".$sector."<br>"."Nombre de la comunidad: ".$nombre_comunidad."<br>"."nombre indigena: ".$nombre_indigena."<br>"."Grupo: ".$grupo;
/* 
 
$base_misiones= $_POST["base_misiones"];
$consejo_comunal= $_POST["consejo_comunal"];
$inf1;
$inf2;

if ($base_misiones=="no"){
    $inf1="no poseen";
}else{
    $inf1= $_POST["inf1"];
}

if($consejo_comunal=="no"){
    $inf2="no poseen";
}else{
    $inf2=$_POST["inf2"];
}

$tipo_de_comsejo_comunal= $_POST["tipo_de_consejo_comunal"];
$pertence_a_una_comunidad=$_POST["pertenece_a_una_comunidad"];
$comité_indígena=$_POST["comité_indígena"];

echo "nombre de la base: ".$inf1."<br>";
echo "nombre del consejo comunal: ".$inf2; */
?>