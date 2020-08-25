<?php

include '../controlador/UsuarioControlador.php';
include '../helps/helps.php';

session_start();
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtNombre"]) && isset($_POST["txtApellido"])
    && isset($_POST["txtCedula"])   && isset($_POST["txtDireccion"])
    && isset($_POST["txtTelefono"])    && isset($_POST["txtCelular"]) 
    && isset($_POST["txtUsuario"]) && isset($_POST["txtPrivilegio"])
    && isset($_POST["txtPassword"])) {
        
        $txtNombre     = validar_campo($_POST["txtNombre"]);
        $txtApellido   = validar_campo($_POST["txtApellido"]);
        $txtCedula     = validar_campo($_POST["txtCedula"]);
        $txtDireccion  = validar_campo($_POST["txtDireccion"]);
        $txtTelefono   = validar_campo($_POST["txtTelefono"]);
        $txtCelular    = validar_campo($_POST["txtCelular"]);
        $txtUsuario    = validar_campo($_POST["txtUsuario"]);
        $txtPrivilegio = validar_campo($_POST["txtPrivilegio"]);
        $salt=md5($_POST["txtPassword"]);
        $passwordEncriptado= crypt($_POST["txtPassword"],$salt);

    
        if (UsuarioControlador::registrar($txtNombre, $txtApellido, $txtCedula, $txtDireccion, $txtTelefono, $txtCelular, $txtUsuario, $txtPrivilegio ,$passwordEncriptado))         {
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

            header("location:admin.php"); 
        }

    }
} else {
     header("location:registro.php?error=1");
 }