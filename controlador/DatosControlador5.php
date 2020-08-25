<?php
include '../datos/InsertaDatos5.php'; 

class DatosControlador5
{

public static function DistribucionPoblacion($total_habitantes_indigenas,$actas_nacimiento,$numero_actas,$cedulas_identidad,$numero_cedulas,$numero_femeninos,$numero_masculinos)
{
    $obj_encuesta=new DistribucionPoblacion();
    $obj_encuesta->setTotal_habitantes_indigenas($total_habitantes_indigenas);
    $obj_encuesta->setActas_nacimiento($actas_nacimiento);
    $obj_encuesta->setNumero_actas($numero_actas);
    $obj_encuesta->setCedulas_indentidad($cedulas_identidad);
    $obj_encuesta->setNumero_cedulas($numero_cedulas);
    $obj_encuesta->setNumero_femeninos($numero_femeninos);
    $obj_encuesta->setNumero_masculinos($numero_masculinos);

    return InsertarDatos5::DistribucionPoblacion($obj_encuesta);

    }
}
?>