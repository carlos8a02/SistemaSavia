<?php

include '../controlador/DatosControlador.php';


session_start();
 //estado,municipios,parroquias,nombre_comunidad,nombre_indigena,grupo
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["municipios"]) && isset($_POST["parroquias"])
    && isset($_POST["nombre_comunidad"])   && isset($_POST["nombre_indigena"])
    && isset($_POST["grupo"])) {    
        $estado = "Anzoategui";
        if($_POST["municipios"] == 1):
        $municipios="Anaco";
        elseif ($_POST["municipios"] == 2):
        $municipios="Aragua";
        elseif($_POST["municipios"] == 3):
        $municipios="Diego Bautista Urbaneja";
        elseif($_POST["municipios"] == 4):
        $municipios="Fernando Peñalver";
        elseif($_POST["municipios"] == 5):
        $municipios="Francisco Del Carmen Carvajal";
        elseif($_POST["municipios"] == 6):
        $municipios="Francisco de Miranda";
        elseif($_POST["municipios"] == 7):
        $municipios="Guanipa";
        elseif($_POST["municipios"] == 8):
        $municipios="Guanta";
        elseif($_POST["municipios"] == 9):
        $municipios="Independencia";
        elseif($_POST["municipios"] == 10):
        $municipios="Jose Gregorio Monagas";
        elseif($_POST["municipios"] == 11):
        $municipios="Juan Antonio Sotillo";
        elseif($_POST["municipios"] == 12):
        $municipios="Juan Manuel Cajigal";
        elseif($_POST["municipios"] == 13):
        $municipios="Libertad";
        elseif($_POST["municipios"] == 14):
        $municipios="Manuel Ezquiel Bruzual";
        elseif($_POST["municipios"] == 15):
        $municipios="Pedro Maria Freitas";
        elseif($_POST["municipios"] == 16):
        $municipios="Piritu";
        elseif($_POST["municipios"] == 17):
        $municipios="San Juan de Capristano";
        elseif($_POST["municipios"] == 18):
        $municipios="Santa Ana";
        elseif($_POST["municipios"] == 19):
        $municipios="Simon Bolivar";
        elseif($_POST["municipios"] == 20):
        $municipios="Simon Rodriguez";
        elseif($_POST["municipios"] == 21):
        $municipios="General Sir Arthur McGregor";
    endif;
        $parroquias   = $_POST["parroquias"];
        $sector  = $_POST["sector"];
        $nombre_comunidad   = $_POST["nombre_comunidad"];
        $nombre_indigena  =$_POST["nombre_indigena"];
        $grupo    = $_POST["grupo"];

    
    }
    if (DatosControlador::Distribucion($estado, $municipios, $parroquias,$sector, $nombre_comunidad, $nombre_indigena, $grupo)) 
    {
        header("location:encuestas/Vista_1.php");     
    } 
    header("location:encuestas/Vista_1.php");
    
}else{
    header("location:encuestas/Vista_1.php?error=1");
} 