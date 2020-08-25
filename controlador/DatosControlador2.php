<?php
include '../datos/InsertaDatos2.php'; 

class DatosControlador2
{

public static function Comunales($base_misiones,$inf1,$consejo_comunal,$inf2,$tipo_de_consejo_comunal,$pertenece_a_unacomunidad, $comite_indigena)
{
    $obj_encuesta=new Comunales();
    $obj_encuesta->setBase_misiones($base_misiones);
    $obj_encuesta->setInf1($inf1);
    $obj_encuesta->setConsejo_comunal($consejo_comunal);
    $obj_encuesta->setInf2($inf2);
    $obj_encuesta->setTipo_de_consejo_comunal($tipo_de_consejo_comunal);
    $obj_encuesta->setPertenece_a_una_comunidad($pertenece_a_unacomunidad);
    $obj_encuesta->setComite_indigena($comite_indigena);

    return InsertarDatos2::Comunales($obj_encuesta);

    }
    public function getDatos2(){
        return InsertarDatos2::getDatos2();
    }
}
?>