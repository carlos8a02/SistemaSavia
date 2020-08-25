<?php

include 'Conexion.php';
include '../entidades/Usuarios.php';


class UsuarioDao extends Conexion
{
    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

/**
 * Metedo para validar login
 * @param       object    $usuario
 * return       boolean
 */

    public static function login($usuario)
    {
 
        $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :passwordEncriptado";

             self::getConexion();

            $resultado = self::$cnx->prepare($query);

            $resultado->bindValue(":usuario",$usuario->getUsuario());
            $resultado->bindValue(":passwordEncriptado",$usuario->getPasswordEncriptado());

            $resultado->execute();

            if($resultado->rowCount() > 0){
                $filas =$resultado->fetch();
                if($filas["usuario"] == $usuario->getUsuario()
                && $filas["password"] == $usuario->getPasswordEncriptado()){
                    return true;
                }
            }
            return false;
    }
/**
 * Metedo para validar Usuario
 * @param       object    $usuario
 * return       obejct
 */

    public static function getUsuario($usuario)
    {
        //verificar que este todo bien con respecto a la BD
        $query = "SELECT id,nombre,apellido,cedula,direccion,telefono,celular,usuario,privilegio FROM usuarios WHERE
         usuario = :usuario AND password = :passwordEncriptado";

             self::getConexion();

            $resultado = self::$cnx->prepare($query);

            $resultado->bindValue(":usuario",$usuario->getUsuario());
            $resultado->bindValue(":passwordEncriptado",$usuario->getPasswordEncriptado());

            $resultado->execute();

            $filas =$resultado->fetch();

            $usuario = new Usuario();

            $usuario->setId($filas["id"]);
            $usuario->setNombre($filas["nombre"]);
            $usuario->setApellido($filas["apellido"]);
            $usuario->setCedula($filas["cedula"]);
            $usuario->setDireccion($filas["direccion"]);
            $usuario->setTelefono($filas["telefono"]);
            $usuario->setCelular($filas["celular"]);
            $usuario->setUsuario($filas["usuario"]);
            $usuario->setPrivilegio($filas["privilegio"]);
            

            return $usuario;
    }

/**
     * Metodo que sirve para registrar usuarios
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function registrar($usuario)
    {
        $query = "INSERT INTO usuarios (nombre,apellido,cedula,direccion,telefono,celular,usuario,privilegio,password) VALUES (:nombre,:apellido,:cedula,:direccion,:telefono,:celular,:usuario,:privilegio,:passwordEncriptado)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":nombre", $usuario->getNombre());
        $resultado->bindValue(":apellido", $usuario->getApellido());
        $resultado->bindValue(":cedula", $usuario->getCedula());
        $resultado->bindValue(":direccion", $usuario->getDireccion());
        $resultado->bindValue(":telefono", $usuario->getTelefono());
        $resultado->bindValue(":celular", $usuario->getCelular());
        $resultado->bindValue(":usuario", $usuario->getUsuario());
        $resultado->bindValue(":privilegio", $usuario->getPrivilegio());
        $resultado->bindValue(":passwordEncriptado", $usuario->getPasswordEncriptado());
        if ($resultado->execute()) {
            return true;
        }

        return false;
    }


}