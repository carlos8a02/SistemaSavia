<?php
include '../datos/InsertaDatos7.php'; 

class DatosControlador7
{

public static function Natalidad ($mujeres_embarazadas,$numero_mujeres_embarazadas,$mujeres_10_17,$numero_menores_embarazadas,$mujeres_18_25,$numero_jovenes_embarazadas,$mujeres_26_45,$numero_adultas_embarazadas,$parteras,$numero_parteras)
{
    $obj_encuesta=new Natalidad();
    $obj_encuesta->setMujeres_embarazadas($mujeres_embarazadas);
    $obj_encuesta->setNumero_mujeres_embarazadas($numero_mujeres_embarazadas);
    $obj_encuesta->setMujeres_10_17($mujeres_10_17);
    $obj_encuesta->setNumero_menores_embarazadas($numero_menores_embarazadas);
    $obj_encuesta->setMujeres_18_25($numero_jovenes_embarazadas);
    $obj_encuesta->setNumero_jovenes_embarazadas($numero_jovenes_embarazadas);
    $obj_encuesta->setMujeres_26_45($mujeres_26_45);
    $obj_encuesta->setNumero_adultas_embarazadas($numero_adultas_embarazadas);
    $obj_encuesta->setParteras($parteras);
    $obj_encuesta->setNumero_parteras($numero_parteras);

    return InsertarDatos7::Natalidad($obj_encuesta);

    }
}
?>