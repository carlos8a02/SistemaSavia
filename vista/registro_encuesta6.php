<?php
 include '../controlador/DatosControlador6.php'; 

 session_start(); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["centro_salud"]) && isset($_POST["estatus"])
    && isset($_POST["ambulancias"])   && isset($_POST["patologias"]))
    {
        $centro_salud=$_POST["centro_salud"];
        $estatus=$_POST["estatus"];
        $ambulancias=$_POST["ambulancias"];
        $patologias=$_POST["patologias"];

            if (DatosControlador6::Centros($centro_salud,$estatus,$ambulancias,$patologias)) 
        {
            header("location:encuestas/Vista_3.php");
        }
    }
    header("location:encuestas/Vista_3.php");
}else{
    header("location:encuestas/Vista_3.php?error=1");
}


?>