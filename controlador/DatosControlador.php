<?php
include '../datos/InsertaDatos.php';


class DatosControlador{

    public static function Distribucion($estado,$municipios,$parroquias,$sector,$nombre_comunidad,$nombre_indigena, $grupo)
    {
        $obj_datos=new Distribucion();
        $obj_datos->setEstado($estado);
        $obj_datos->setMunicipios($municipios);
        $obj_datos->setParroquias($parroquias);
        $obj_datos->setSector($sector);
        $obj_datos->setNombre_comunidad($nombre_comunidad);
        $obj_datos->setNombre_indigena($nombre_indigena);
        $obj_datos->setGrupo($grupo);
       

        return InsertarDatos::Distribucion($obj_datos);

    }
    public function getDatos(){
        return InsertarDatos::getDatos();
    }
    
}

?>