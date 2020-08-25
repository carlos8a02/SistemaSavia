<?php

 include '../controlador/DatosControlador4.php'; 

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["unidos"]) && isset($_POST["casados"])
    && isset($_POST["solteros"])   && isset($_POST["divorciados"]) 
    && isset($_POST["otros"]))
    {
      $unidos=$_POST["unidos"];
      $casados=$_POST["casados"];
      $solteros=$_POST["solteros"];
      $divorciados=$_POST["divorciados"];
      $otros=$_POST["otros"];

         if (DatosControlador4::Civil($unidos, $casados, $solteros, $divorciados, $otros)) 
        {
            header("location:encuestas/Vista_2.php"); 
        }
        header("location:encuestas/Vista_2.php");
    }else{
        header("location:encuestas/Vista_1.php?error=1");
    }
}else{
    header("location:encuestas/Vista_1.php?error=1");
}

?>