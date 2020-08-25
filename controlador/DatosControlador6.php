<?php
include '../datos/InsertaDatos6.php'; 

class DatosControlador6
{

public static function Centros($centro_salud,$estatus,$ambulancias,$patologias)
{
    $obj_encuesta=new Centros();
    $obj_encuesta->setCentro_salud($centro_salud);
    $obj_encuesta->setEstatus($estatus);
    $obj_encuesta->setAmbulancias($ambulancias);
    $obj_encuesta->setPatologias($patologias);

    return InsertarDatos6::Centros($obj_encuesta);

    }
}
?>