<?php
include '../controlador/DatosControlador8.php';


session_start(); 
$lactantes=$_POST["lactantes"];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST["lactantes"]))
    {
        if($lactantes=="si"):
        $total_lactante=$_POST["total_lactante"];
        elseif($lactantes=="no"):
        $total_lactante="0";
        endif;
        if (DatosControlador8::Lantando($lactantes,$total_lactante)) 
        {
        }
    }
    header("location:encuestas/Vista_3.php"); 
}else{
    header("location:encuestas/Vista_3.php?error=1");
}
?>