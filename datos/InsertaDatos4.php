<?php
include 'Conexion.php';
include '../entidades/estadoCivil.php';

    class InsertarDatos4 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Civil($respuestas)
    {
        $query = "INSERT INTO estadocivil (unidos,	casados,	solteros,	divorciados,	otros) 
        VALUES (:unidos,:casados,:solteros,:divorciados,:otros)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":unidos", $respuestas->getUnidos());
        $resultado->bindValue(":casados", $respuestas->getCasados());
        $resultado->bindValue(":solteros", $respuestas->getSolteros());
        $resultado->bindValue(":divorciados", $respuestas->getDivorciados());
        $resultado->bindValue(":otros", $respuestas->getOtros());
       

        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
}
?>