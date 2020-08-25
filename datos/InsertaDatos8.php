<?php
include 'Conexion.php';
include '../entidades/lactancia.php';

    class InsertarDatos8 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Lantando($respuestas)
    {
        $query = "INSERT INTO lactancias (lactantes,	total_lactante) 
        VALUES (:lactantes,	:total_lactante)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":lactantes", $respuestas->getLactantes());
        $resultado->bindValue(":total_lactante", $respuestas->getTotal_lactante());
       

        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
}
?>