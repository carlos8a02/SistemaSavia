<?php

 include '../controlador/DatosControlador3.php'; 

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre_vocero"]) && isset($_POST["nombre_autoridad_legitima"])
    && isset($_POST["cargo_autoridad_legitima"])   && isset($_POST["numero_de_telefono"])) 
    {
      $nombre_vocero=$_POST["nombre_vocero"];
      $nombre_autoridad_legitima=$_POST["nombre_autoridad_legitima"];
      $cargo_autoridad_legitima=$_POST["cargo_autoridad_legitima"];
      $numero_de_telefono=$_POST["numero_de_telefono"];

         if (DatosControlador3::AutoridadLegitima($nombre_vocero, $nombre_autoridad_legitima, $cargo_autoridad_legitima, $numero_de_telefono)) 
        {
        }
        header("location:encuestas/Vista_1.php"); 
    }else{
        header("location:encuestas/Vista_1.php?error=1");
    }
   
}else{
    header("location:encuestas/Vista_1.php?error=1");
}