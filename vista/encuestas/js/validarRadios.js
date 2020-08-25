/* Validar Vista 1 */

/* Radio base de misiones */
function validarBaseMisiones(value){
    if(value=="si"){
    // habilitar
    document.getElementById("inf1").disabled=false;
    
}else if(value=="no"){
    // deshabilitar
    document.getElementById("inf1").disabled=true;
    }
}
/*Radio consejo comunal */
function validarConsejoComunal(value){
    if (value=="si"){
        // habilitar
        document.getElementById("inf2").disabled=false;
    }else if(value=="no"){   
        // deshabilitar
        document.getElementById("inf2").disabled=true;
    }
}
/*Validar Vista 2 */
 /* Radio Actas */
function validarActa(value){
    if (value=="si"){
        // habilitamos
        document.getElementById("numero_actas").disabled=true;
    }else if(value=="no"){   
        // deshabilitamos
        document.getElementById("numero_actas").disabled=false;
    }
}
/* Radio Cadulas */
function validarCedulas(value){
    if (value=="si"){
        // habilitamos
        document.getElementById("numero_cedulas").disabled=true;
    }else if(value=="no"){   
        // deshabilitamos
        document.getElementById("numero_cedulas").disabled=false;
    }
}
/*Radio Menores */
function validarMenores(value){
    if (value=="si"){
        // habilitar
        document.getElementById("femenino").disabled=false;
        document.getElementById("masculino").disabled=false;
    }else if(value=="no"){   
        // deshabilitar
        document.getElementById("femenino").disabled=true;
        document.getElementById("masculino").disabled=true;
    }
}
/* Radio Niños */
function validarNinos(value){
    if (value=="si"){
        // habilitar
        document.getElementById("ninoFemenino").disabled=false;
        document.getElementById("ninoMasculino").disabled=false;
    }else if(value=="no"){   
        // deshabilitar
        document.getElementById("ninoFemenino").disabled=true;
        document.getElementById("ninoMasculino").disabled=true;
    }
}
/* Radio Jovenes */
function validarJovenes(value){
    if (value=="si"){
        // habilitar
        document.getElementById("jovenFemenino").disabled=false;
        document.getElementById("jovenMasculino").disabled=false;
    }else if(value=="no"){   
        // deshabilitar
        document.getElementById("jovenFemenino").disabled=true;
        document.getElementById("jovenMasculino").disabled=true;
    }
}
/* Radio Adolescentes */
function validarAdolescentes(value){
    if (value=="si"){
        // habilitar
        document.getElementById("adolescenteFemenino").disabled=false;
        document.getElementById("adolescenteMasculino").disabled=false;
    }else if(value=="no"){   
        // deshabilitar
        document.getElementById("adolescenteFemenino").disabled=true;
        document.getElementById("adolescenteMasculino").disabled=true;
    }
}
/* Radio Adultos */
function validarAdultos(value){
    if (value=="si"){
        // habilitar
        document.getElementById("adultoFemenino").disabled=false;
        document.getElementById("adultoMasculino").disabled=false;
    }else if(value=="no"){   
        // deshabilitar
        document.getElementById("adultoFemenino").disabled=true;
        document.getElementById("adultoMasculino").disabled=true;
    }
}
/* Radio Mayores */
function validarMayores(value){
    if (value=="si"){
        // habilitar
        document.getElementById("mayorFemenino").disabled=false;
        document.getElementById("mayorMasculino").disabled=false;
    }else if(value=="no"){   
        // deshabilitar
        document.getElementById("mayorFemenino").disabled=true;
        document.getElementById("mayorMasculino").disabled=true;
    }
}

/* embarazadas */

/* Radio Embarazadas */
function validarEmbarazadas(value){
    if (value=="si"){
        // habilitar
        document.getElementById("numero_mujeres_embarazadas").disabled=false;
        document.getElementById("numero_mujeres_embarazadas").disabled=false;
        document.getElementById("numero_menores_embarazadas").disabled=false;
        document.getElementById("numero_jovenes_embarazadas").disabled=false;
        document.getElementById("numero_adultas_embarazadas").disabled=false;

        document.getElementById("Mujeres_10_17").disable=false;

        document.getElementById("mujeres_18_25").disable=false;

        document.getElementById("mujeres_26_45").disable=false;

       
    }else if(value=="no"){
        // deshabilitar
        document.getElementById("numero_mujeres_embarazadas").disabled=true;
        document.getElementById("numero_menores_embarazadas").disabled=true;
        document.getElementById("numero_jovenes_embarazadas").disabled=true;
        document.getElementById("numero_adultas_embarazadas").disabled=true;

        document.getElementById("Mujeres_10_17").disable=true;
        document.getElementById("Mujeres_10_17").value="no";

        document.getElementById("mujeres_18_25").disable=true;
        document.getElementById("mujeres_18_25").value="no";

        document.getElementById("mujeres_26_45").disable=true;
        document.getElementById("mujeres_26_45").value="no";
        
    }
}
/* Radio Menores Embarazadas */
function validarMenoresEmbarazadas(value){
    if (value=="si"){
        // habilitamos
        document.getElementById("numero_menores_embarazadas").disabled=false;
    }else if(value=="no"){
        // deshabilitamos
        document.getElementById("numero_menores_embarazadas").disabled=true;

    }
}
/* Radio Jovenes Embarazadas  */
function validarJovenesEmbarazadas(value){
    if (value=="si"){
        // habilitamos
        document.getElementById("numero_jovenes_embarazadas").disabled=false;
    }else if(value=="no"){
        // deshabilitamos
        document.getElementById("numero_jovenes_embarazadas").disabled=true;

    }
}

/* Radio Mujeres */
function validarMujeresAdultas(value){
    if (value=="si"){
        // habilitamos
        document.getElementById("numero_adultas_embarazadas").disabled=false;
    }else if(value=="no"){
        // deshabilitamos
        document.getElementById("numero_adultas_embarazadas").disabled=true;

    }
}
/* Radio Parteras */
function validarParteras(value){
    if (value=="si"){
        // habilitamos
        document.getElementById("numero_parteras").disabled=false;
    }else if(value=="no"){
        // deshabilitamos
        document.getElementById("numero_parteras").disabled=true;

    }
}
/* Radio Lactancia */
function validarLactancia(value){
    if (value=="si"){
        // habilitamos
        document.getElementById("total_lactante").disabled=false;
    }else if(value=="no"){
        // deshabilitamos
        document.getElementById("total_lactante").disabled=true;

    }
}
/* Radio Discapacidades */
function validarDispacitados(value){
    if(value=="si"){
        document.getElementById("cantidad_discapacidad").disabled=false;
        document.getElementById("discapacidad_femeninas").disabled=false;
        document.getElementById("discapacidad_masculinos").disabled=false;
        document.getElementById("tipo_discapacidad").disabled=false;
}else if(value=="no"){
        document.getElementById("cantidad_discapacidad").disabled=true;
        document.getElementById("discapacidad_femeninas").disabled=true;
        document.getElementById("discapacidad_masculinos").disabled=true;
        document.getElementById("tipo_discapacidad").disabled=true;
    }
}