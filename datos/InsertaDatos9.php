<?php
include 'Conexion.php';
include '../entidades/tasa_infantiles.php';

    class InsertarDatos9 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Infantil($respuestas)
    {
        $query = "INSERT INTO natalidad_infantil (infantes_femeninos,infantes_masculinos,nacidos)
        VALUES (:infantes_femeninos,:infantes_masculinos,:nacidos)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":infantes_femeninos", $respuestas->getInfantes_femeninos());
        $resultado->bindValue(":infantes_masculinos", $respuestas->getInfantes_masculinos());
        $resultado->bindValue(":nacidos", $respuestas->getNacidos());
       

        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
}
?>