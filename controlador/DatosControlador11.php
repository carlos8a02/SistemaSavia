<?php
include '../datos/InsertaDatos11.php'; 

class DatosControlador11
{

public static function Comerciantes ($comercio,$tipos_comercios)
{
    $obj_encuesta=new Comerciantes();
    $obj_encuesta->setComercio($comercio);
    $obj_encuesta->setTipos_comercios($tipos_comercios);

    return InsertarDatos11::Comerciantes($obj_encuesta);

    }
}
?>