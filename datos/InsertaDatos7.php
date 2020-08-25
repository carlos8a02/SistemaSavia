<?php
include 'Conexion.php';
include '../entidades/natalidad.php';

    class InsertarDatos7 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Natalidad ($respuestas)
    {
        $query = "INSERT INTO natalidades (mujeres_embarazadas,numero_mujeres_embarazadas,mujeres_10_17,numero_menores_embarazadas,mujeres_18_25,numero_jovenes_embarazadas,mujeres_26_45,numero_adultas_embarazadas,parteras,numero_parteras) 
        VALUES (:mujeres_embarazadas,:numero_mujeres_embarazadas,:mujeres_10_17,:numero_menores_embarazadas,:mujeres_18_25,:numero_jovenes_embarazadas,:mujeres_26_45,:numero_adultas_embarazadas,:parteras,:numero_parteras)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":mujeres_embarazadas", $respuestas->getMujeres_embarazadas());
        $resultado->bindValue(":numero_mujeres_embarazadas", $respuestas->getNumero_mujeres_embarazadas());
        $resultado->bindValue(":mujeres_10_17", $respuestas->getMujeres_10_17());
        $resultado->bindValue(":numero_menores_embarazadas", $respuestas->getNumero_menores_embarazadas());
        $resultado->bindValue(":mujeres_18_25", $respuestas->getMujeres_18_25());
        $resultado->bindValue(":numero_jovenes_embarazadas", $respuestas->getNumero_jovenes_embarazadas());
        $resultado->bindValue(":mujeres_26_45", $respuestas->getMujeres_26_45());
        $resultado->bindValue(":numero_adultas_embarazadas", $respuestas->getNumero_adultas_embarazadas());
        $resultado->bindValue(":parteras", $respuestas->getParteras());
        $resultado->bindValue(":numero_parteras", $respuestas->getNumero_parteras());
       

        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
}
?>