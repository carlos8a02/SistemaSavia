<?php
include 'Conexion.php';
include '../entidades/viviendas.php';

    class InsertarDatos13 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Viviendas($respuestas)
    {
        $query = "INSERT INTO viviendas (vivienda,	tipos_viviendas,	otras_vivienda)
        VALUES (:vivienda,	:tipos_viviendas,	:otras_vivienda)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":vivienda", $respuestas->getVivienda());
        $resultado->bindValue(":tipos_vivienda", $respuestas->getTipos_vivienda());
        $resultado->bindValue(":otras_vivienda", $respuestas->getOtras_vivienda());
        
       

        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
}
?>