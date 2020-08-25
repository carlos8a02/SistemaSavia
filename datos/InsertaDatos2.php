<?php
include 'Conexion.php';
include '../entidades/comunas.php';

    class InsertarDatos2 extends Conexion{
        protected static $cnx;
    
        private static function getConexion()
        {
            self::$cnx = Conexion::conectar();
        }
    
        private static function desconectar()
        {
            self::$cnx = null;
        }

    public static function Comunales($respuestas)
    {
        $query = "INSERT INTO comunas (base_misiones,inf1,consejo_comunal,inf2,tipo_de_consejo_comunal,pertenece_a_una_comunidad,comite_indigena) VALUES (:base_misiones,:inf1,:consejo_comunal,:inf2,:tipo_de_consejo_comunal,:pertenece_a_una_comunidad, :comite_indigena)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);
        //base_misiones,inf1,consejo_comunal,inf2,tipo_de_consejo_comunal,pertenece_a_una_comunidad,comite_indigen
        $resultado->bindValue(":base_misiones", $respuestas->getBase_misiones());
        $resultado->bindValue(":inf1", $respuestas->getInf1());
        $resultado->bindValue(":consejo_comunal", $respuestas->getConsejo_comunal());
        $resultado->bindValue(":inf2", $respuestas->getInf2());
        $resultado->bindValue(":tipo_de_consejo_comunal", $respuestas->getTipo_de_consejo_comunal());
        $resultado->bindValue(":pertenece_a_una_comunidad", $respuestas->getPertenece_a_una_comunidad());
        $resultado->bindValue(":comite_indigena", $respuestas->getComite_indigena());
       
       
        if ($resultado->execute()) {
            return false;
        }

        return false;
    } 
    public static function getDatos2()
    {
        //verificar que este todo bien con respecto a la BD
        $query = "SELECT id,base_misiones,inf1,consejo_comunal,inf2,tipo_de_consejo_comunal,pertenece_a_unacomunidad, comite_indigena FROM comunas";

             self::getConexion();

            $resultado = self::$cnx->prepare($query);

            

              $resultado->execute();

            $filas3=$resultado->fetchAll();
            

            return $filas3;
    }
}
?>