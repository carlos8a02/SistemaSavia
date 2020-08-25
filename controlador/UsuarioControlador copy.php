<?php
include '../datos/UsuarioDao.php';


class UsuarioControlador
{
    public static function login($usuario,$passwordEncriptado)
    {
        $obj_usuario=new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPasswordEncriptado($passwordEncriptado);

        return UsuarioDao::login($obj_usuario);
    }


    public static function getUsuario($usuario,$passwordEncriptado)
    {
        $obj_usuario=new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPasswordEncriptado($passwordEncriptado);

        return UsuarioDao::getUsuario($obj_usuario);

    }

    public static function registrar($nombre,$apellido,$cedula,$direccion,$telefono,$celular, $usuario,$privilegio,$passwordEncriptado)
    {
        $obj_usuario=new Usuario();
        $obj_usuario->setNombre($nombre);
        $obj_usuario->setApellido($apellido);
        $obj_usuario->setCedula($cedula);
        $obj_usuario->setDireccion($direccion);
        $obj_usuario->setTelefono($telefono);
        $obj_usuario->setCelular($celular);
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPrivilegio($privilegio);
        $obj_usuario->setPasswordEncriptado($passwordEncriptado);

        return UsuarioDao::registrar($obj_usuario);

    }
    
}
