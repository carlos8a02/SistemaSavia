<?php
 include '../controlador/DatosControlador5.php'; 
 session_start(); 
        $total_habitantes_indigenas=$_POST["total_habitantes_indigenas"];
        $actas_nacimiento=$_POST["actas_nacimiento"];
        $cedulas_indentidad=$_POST["cedulas_identidad"];
        $numero_femeninos=$_POST["numero_femeninos"];
        $numero_masculinos=$_POST["numero_masculinos"];
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
   if (isset($_POST["total_habitantes_indigenas"]) && isset($_POST["actas_nacimiento"])
     && isset($_POST["cedulas_identidad"])  && isset($_POST["numero_femeninos"])
    && isset($_POST["numero_masculinos"]) ) 
    { 
        if($actas_nacimiento=="si"):
        $numero_actas="0";
        elseif($actas_nacimiento=="no"):
            $numero_actas=$_POST["numero_actas"];
        endif; 

        if($cedulas_indentidad=="si"):
            $numero_cedulas="0";
            elseif($cedulas_indentidad=="no"):
            $numero_cedulas=$_POST["numero_cedulas"];
        endif;
      
        if (DatosControlador5::DistribucionPoblacion($total_habitantes_indigenas,$actas_nacimiento,$numero_actas,$cedulas_indentidad,$numero_cedulas,$numero_femeninos,$numero_masculinos)) 
        {
            header("location:encuestas/Vista_3.php");  
        }
    }
     header("location:encuestas/Vista_3.php"); 
 }else{
    header("location:encuestas/Vista_2.php?error=1");
}
 


?>