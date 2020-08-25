<?php
include '../datos/InsertaDatos13.php'; 

class DatosControlador13
{

public static function Viviendas($vivienda,	$tipos_vivienda,	$otras_vivienda)
{
    $obj_encuesta=new Viviendas();
    $obj_encuesta->setVivienda($vivienda);
    $obj_encuesta->setTipos_vivienda($tipos_vivienda);
    $obj_encuesta->setOtras_vivienda($otras_vivienda);

    return InsertarDatos13::Viviendas($obj_encuesta);

    }
}
?>