<?php

include '../controlador/DatosControlador9.php'; 

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if(isset($_POST["infantes_femeninos"]) && isset($_POST["infantes_masculinos"])
   && isset($_POST["nacidos"])){

       $infantes_femeninos=$_POST["infantes_femeninos"];
       $infantes_masculinos=$_POST["infantes_masculinos"];
       $nacidos=$_POST["nacidos"];
       
       if (DatosControlador9::Infantil ($infantes_femeninos,$infantes_masculinos,$nacidos))
       {
           
           
    }
    header("location:encuestas/Vista_3.php"); 
}else{
    header("location:encuestas/Vista_3.php?error=1");
}
     
   
}else{
    header("location:encuestas/Vista_3.php?error=1");
}