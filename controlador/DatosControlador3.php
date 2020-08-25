<?php
include '../datos/InsertaDatos3.php'; 

class DatosControlador3
{

public static function AutoridadLegitima($nombre_vocero,$nombre_autoridad_legitima,$cargo_autoridad_legitima,$numero_de_telefono)
{
    $obj_encuesta=new AutoridadLegitima();
    $obj_encuesta->setNombre_vocero($nombre_vocero);
    $obj_encuesta->setNombre_autoridad_legitima($nombre_autoridad_legitima);
    $obj_encuesta->setCargo_autoridad_legitima($cargo_autoridad_legitima);
    $obj_encuesta->setNumero_de_telefono($numero_de_telefono);


    return InsertarDatos3::AutoridadLegitima($obj_encuesta);

    }
}
?>