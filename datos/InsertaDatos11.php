<?php
include 'Conexion.php';
include '../entidades/comerciantes.php';

    class InsertarDatos11 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Comerciantes($respuestas)
    {
        $query = "INSERT INTO comercios (comercio,	tipos_comercios)
        VALUES (:comercio,	:tipos_comercios)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":comercio", $respuestas->getComercio());
        $resultado->bindValue(":tipos_comercios", $respuestas->getTipos_comercios());
       

        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
}
?>