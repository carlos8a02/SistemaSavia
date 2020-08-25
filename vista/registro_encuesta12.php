<?php
include '../controlador/DatosControlador12.php';


session_start();  
$cuenta_propia=$_POST["cuenta_propia"];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST["cuenta_propia"]))
    {
        echo $cuenta_propia;
         if (DatosControlador12::Independiente($cuenta_propia)) 
        {
        } 
    }
     header("location:encuestas/Vista_4.php");
}else{
    header("location:encuestas/Vista_4.php?error=1");
}
?>