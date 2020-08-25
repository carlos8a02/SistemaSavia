<?php
include '../controlador/DatosControlador13.php';


session_start();  
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST["vivienda"]) && isset($_POST["tipos_vivienda"])
        && isset($_POST["otras_vivienda"]))
    {
        $vivienda=$_POST["vivienda"];
        $tipos_vivienda=$_POST["tipos_vivienda"];
        $otras_vivienda=$_POST["otras_vivienda"];
        if (DatosControlador13::Viviendas($vivienda,$tipos_vivienda,$otras_vivienda))
        {
            header("location:encuestas/Vista_4.php");
        } 
    }
    header("location:encuestas/Vista_4.php");
}else{
    header("location:encuestas/Vista_4.php?error=1");
}


?>