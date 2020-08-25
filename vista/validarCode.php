<?php

include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';

session_start();

header('Content-type: application/json');
$resultado = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"])) {
        $salt=md5($_POST["txtPassword"]);
        $passwordEncriptado= crypt($_POST["txtPassword"],$salt);

        $txtUsuario  = validar_campo($_POST["txtUsuario"]);

        $resultado = array("estado" => "true");

        if (UsuarioControlador::login($txtUsuario, $passwordEncriptado)) {
            $usuario             = UsuarioControlador::getUsuario($txtUsuario, $passwordEncriptado);
            $_SESSION["usuario"] = array(
                "id"         => $usuario->getId(),
                "nombre"     => $usuario->getNombre(),
                "apellido"   => $usuario->getApellido(),
                "cedula"     => $usuario->getCedula(),
                "direccion"  => $usuario->getDireccion(),
                "telefono"   => $usuario->getTelefono(),
                "celular"    => $usuario->getCelular(),
                "usuario"    => $usuario->getUsuario(),
                "privilegio" => $usuario->getPrivilegio(),
            );
            return print(json_encode($resultado));
        }

    }
}

$resultado = array("estado" => "false");
return print(json_encode($resultado));