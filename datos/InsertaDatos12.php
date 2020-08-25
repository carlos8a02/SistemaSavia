<?php
include 'Conexion.php';
include '../entidades/cuenta_propia.php';

    class InsertarDatos12 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Independiente($respuestas)
    {
        $query = "INSERT INTO empleo_independiente(cuenta_propia)
        VALUES (:cuenta_propia)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":cuenta_propia", $respuestas->getCuenta_propia());
       

        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
}
?>