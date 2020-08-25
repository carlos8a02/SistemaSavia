<?php
include 'Conexion.php';
include '../entidades/Discapacitados.php';

    class InsertarDatos10 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Discapacitados($respuestas)
    {
        $query = "INSERT INTO discapacidades (discapacidad,	cantidad_discapacidad,	discapacidad_femeninas,	discapacidad_masculinos,	tipo_discapacidad)
        VALUES (:discapacidad,:cantidad_discapacidad,:discapacidad_femeninas,:discapacidad_masculinos,:tipo_discapacidad)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":discapacidad", $respuestas->getDiscapacidad());
        $resultado->bindValue(":cantidad_discapacidad", $respuestas->getCantidad_discapacidad());
        $resultado->bindValue(":discapacidad_femeninas", $respuestas->getDiscapacidad_femeninas());
        $resultado->bindValue(":discapacidad_masculinos", $respuestas->getDiscapacidad_masculinos());
        $resultado->bindValue(":tipo_discapacidad", $respuestas->getTipo_discapacidad());
       

        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
}
?>