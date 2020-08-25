<?php
include '../datos/InsertaDatos9.php';

class DatosControlador9
{

public static function Infantil($infantes_femeninos,$infantes_masculinos,$nacidos)
{
    $obj_encuesta=new Infantil();
    $obj_encuesta->setInfantes_femeninos($infantes_femeninos);
    $obj_encuesta->setInfantes_masculinos($infantes_masculinos);
    $obj_encuesta->setNacidos($nacidos);

    return InsertarDatos9::Infantil($obj_encuesta);

    }
}
?>