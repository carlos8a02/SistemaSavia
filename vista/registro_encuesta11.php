<?php
include '../controlador/DatosControlador11.php'; 

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["comercio"]) && isset($_POST["tipos_comercios"]) ){ 
    $comercio=$_POST["comercio"];
    $tipos_comercios=$_POST["tipos_comercios"];
    
    if (DatosControlador11::Comerciantes($comercio,$tipos_comercios)) 
   {
   }
}
    header("location:encuestas/Vista_4.php");
 }else{
    header("location:encuestas/Vista_4.php?error=1");
 } 
?>