<?php

class Conexion{
    /**
     * conexion a la BD
     * @return  PDO
     */
    public static function conectar(){
        try{
            $cn=new PDO("mysql:host=localhost;dbname=savia","root","");
            
             return $cn;
             
        }catch (PDOExcepcion $ex){
            die($ex->getMessage());
        }
    }

}

Conexion::conectar();