  var parroquias_1=new Array("-","Anaco","San Joaquín","Buena Vista");
  var parroquias_2=new Array("-","Cachipo","Aragua de Barcelona");
  var parroquias_3=new Array("-","Lecheria","El Morro");
  var parroquias_4=new Array("-","Puerto Píritu","San Miguel","Sucre");
  var parroquias_5=new Array("-","Valle de Guanape","Santa Barbara");
  var parroquias_6=new Array("-","Atapire","Boca del Pao","El Pao","Pariaguan");
  var parroquias_7=new Array("-","San José de Guanipa");
  var parroquias_8=new Array("-","Guanta","Chorreon");
  var parroquias_9=new Array("-","Mamo","Soledad");
  var parroquias_10=new Array("-","Mapire","Piar","Santa Clara","San Diego de Cabrutica","Uverito","Zuata");
  var parroquias_11=new Array("-","Puerto la Cruz","Pozuelos");
  var parroquias_12=new Array("-","Onoto","San Pablo");
  var parroquias_13=new Array("-","San Mateo","El Carito","Santa Inés","La Romereña");
  var parroquias_14=new Array("-","Clarines","Guanape","Sabana de Uchire");
  var parroquias_15=new Array("-","Cantaura","Libertador","Santa Rosa","Urica");
  var parroquias_16=new Array("-","Píritu","San Francisco");
  var parroquias_17=new Array("-","Boca de Uchire","Boca de Chávez");
  var parroquias_18=new Array("-","Pueblo Nuevo","Santa Ana");
  var parroquias_19=new Array("-","Bergatín","Caigua","El Carmen","El Pilar","Naricual","San Cristóbal");
  var parroquias_20=new Array("-","Edmundo Barrios","Miguel Otero Silva");
  var parroquias_21=new Array("-","El Chaparro","Tomás Alfaro","Calatrava");

  var todasParroquias = [
    [],
    parroquias_1,
    parroquias_2,
    parroquias_3,
    parroquias_4,
    parroquias_5,
    parroquias_6,
    parroquias_7,
    parroquias_8,
    parroquias_9,
    parroquias_10,
    parroquias_11,
    parroquias_12,
    parroquias_13,
    parroquias_14,
    parroquias_15,
    parroquias_16,
    parroquias_17,
    parroquias_18,
    parroquias_19,
    parroquias_20,
    parroquias_21,
  ];

  function cambia_parroquias(){ 
   	//tomo el valor del select del Municipio elegido 
   	var municipios
   	municipios = document.f1.municipios[document.f1.municipios.selectedIndex].value 
   	//miro si el municipio está definido 
   	if (municipios != 0) { 
      	//si estaba definido, entonces coloco las opciones de las parroquias correspondiente. 
      	//selecciono el array de parroquia adecuado 
      	mis_parroquias=todasParroquias[municipios]
      	//calculo el numero de parroquias 
      	num_parroquias = mis_parroquias.length 
      	//marco el número de provincias en el select 
      	document.f1.parroquias.length = num_parroquias 
      	//para cada provincia del array, la introduzco en el select 
      	for(i=0;i<num_parroquias;i++){ 
         	document.f1.parroquias.options[i].value=mis_parroquias[i] 
         	document.f1.parroquias.options[i].text=mis_parroquias[i] 
      	}	
   	}else{ 
      	//si no había parroquia seleccionada, elimino las parroquias del select 
      	document.f1.parroquias.length = 1 
      	//coloco un guión en la única opción que he dejado 
      	document.f1.parroquias.options[0].value = "-" 
      	document.f1.parroquias.options[0].text = "-" 
   	} 
   	//marco como seleccionada la opción primera de provincia 
   	document.f1.parroquias.options[0].selected = true 
}