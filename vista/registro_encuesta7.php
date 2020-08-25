<?php
 include '../controlador/DatosControlador7.php'; 

 session_start(); 
$mujeres_embarazadas=$_POST["mujeres_embarazadas"];
$parteras=$_POST["parteras"];
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST["mujeres_embarazadas"]))
    {
        if($mujeres_embarazadas=="si"):
        $numero_mujeres_embarazadas=$_POST["numero_mujeres_embarazadas"];
        $mujeres_10_17=$_POST["mujeres_10_17"];
        $mujeres_18_25=$_POST["mujeres_18_25"];    
        $mujeres_26_45=$_POST["mujeres_26_45"];
        $parteras=$_POST["parteras"];
        $numero_parteras=$_POST["numero_parteras"];
        //Validaciones de cada radio para especificar las edades de las mujeres embarazadas
            if($mujeres_10_17=="si"):
                $numero_menores_embarazadas=$_POST["numero_menores_embarazadas"];
                elseif($mujeres_10_17=="no"):
                    $numero_menores_embarazadas="0";
                  
                endif;

                if($mujeres_18_25=="si"):
                    $numero_jovenes_embarazadas=$_POST["numero_jovenes_embarazadas"];
                    elseif($mujeres_18_25=="no"):
                        $numero_jovenes_embarazadas="0";
                    endif;

                if($mujeres_26_45=="si"):
                    $numero_adultas_embarazadas=$_POST["numero_adultas_embarazadas"];
                    elseif($mujeres_26_45=="no"):
                        $numero_adultas_embarazadas="0";
                    endif;

            elseif($mujeres_embarazadas=="no"):

                $numero_mujeres_embarazadas="0";
                $mujeres_10_17="no";
                $numero_menores_embarazadas="0";
                $mujeres_18_25="no";
                $numero_jovenes_embarazadas="0";
                $mujeres_26_45="no";
                $numero_adultas_embarazadas="0";
              
            endif;
            if($parteras=="si"):
                $numero_parteras=$_POST["numero_parteras"];
                elseif($parteras=="no"):
                    $numero_parteras="0";
            
            endif;
            if (DatosControlador7::Natalidad($mujeres_embarazadas,$numero_mujeres_embarazadas,$mujeres_10_17,$numero_menores_embarazadas,$mujeres_18_25,$numero_jovenes_embarazadas,$mujeres_26_45,$numero_adultas_embarazadas,$parteras,$numero_parteras)) 
            {
            }
    }
    header("location:encuestas/Vista_3.php"); 
}else{
    header("location:encuestas/Vista_3.php?error=1");
}
?>