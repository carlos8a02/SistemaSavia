<?php
include 'Conexion.php';
include '../entidades/distribucionPoblacion.php';

    class InsertarDatos5 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function DistribucionPoblacion($respuestas)
    {
        $query = "INSERT INTO distribucion_poblacion (total_habitantes_indigenas,	actas_nacimiento,	numero_actas,	cedulas_indentidad,	numero_cedulas,	numero_femeninos,numero_masculinos) 
        VALUES (:total_habitantes_indigenas,:actas_nacimiento,:numero_actas,:cedulas_identidad,:numero_cedulas,:numero_femeninos,:numero_masculinos)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        
        $resultado->bindValue(":total_habitantes_indigenas", $respuestas->getTotal_habitantes_indigenas());
        $resultado->bindValue(":actas_nacimiento", $respuestas->getActas_nacimiento());
        $resultado->bindValue(":numero_actas", $respuestas->getNumero_actas());
        $resultado->bindValue(":cedulas_identidad", $respuestas->getCedulas_indentidad());
        $resultado->bindValue(":numero_cedulas", $respuestas->getNumero_cedulas());
        $resultado->bindValue(":numero_femeninos", $respuestas->getNumero_femeninos());
        $resultado->bindValue(":numero_masculinos", $respuestas->getNumero_masculinos());
       

        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
}
?>