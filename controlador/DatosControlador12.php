<?php
include '../datos/InsertaDatos12.php'; 

class DatosControlador12
{

public static function Independiente ($cuenta_propia)
{
    $obj_encuesta=new Independiente();
    $obj_encuesta->setCuenta_propia($cuenta_propia);

    return InsertarDatos12::Independiente($obj_encuesta);

    }
}
?>