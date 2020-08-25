<?php
include '../datos/InsertaDatos10.php'; 

class DatosControlador10
{

public static function Discapacitados($discapacidad,$cantidad_discapacidad,$discapacidad_femeninas,$discapacidad_masculinos,$tipo_discapacidad)
{
    $obj_encuesta=new Discapacitados();
    $obj_encuesta->setDiscapacidad($discapacidad);
    $obj_encuesta->setCantidad_discapacidad($cantidad_discapacidad);
    $obj_encuesta->setDiscapacidad_femeninas($discapacidad_femeninas);
    $obj_encuesta->setDiscapacidad_masculinos($discapacidad_masculinos);
    $obj_encuesta->setTipo_discapacidad($tipo_discapacidad);

    return InsertarDatos10::Discapacitados($obj_encuesta);

    }
}
?>