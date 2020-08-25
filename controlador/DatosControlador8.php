<?php
include '../datos/InsertaDatos8.php'; 

class DatosControlador8
{

public static function Lantando ($lactantes,$total_lactante)
{
    $obj_encuesta=new Lantando();
    $obj_encuesta->setLactantes($lactantes);
    $obj_encuesta->setTotal_lactante($total_lactante);

    return InsertarDatos8::Lantando($obj_encuesta);

    }
}
?>