<!DOCTYPE html>
<?php 
session_start();
//1 admin, 2 supervisor y 3 analista
if (isset($_SESSION["usuario"])) {
      if ($_SESSION["usuario"]["privilegio"] == 3) :
            header("location:../crud.php");
        endif;
  } else {
      header("location:../login.php");
  }
?>
<header>
      <img src="../assets/img/cabezera.png" class="imagen-cabezera" alt="Cabezera">
</header>
<!-- boton usuario -->
<div class="btn-group dropleft">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php
      echo $_SESSION["usuario"]["usuario"]."<i class='fas fa-user'></i>"."</span>";
    ?>
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="../cerrar-sesion.php"><i class='fa fa-sign-out-alt'></i> Cerrar Sesion</a>
      
  </div>
</div>
<!-- / boton usuario -->
<html lang="es">
<head>
<link rel="stylesheet" href="../assets/css/fontawesome/css/all.css">
<link rel="stylesheet" href="../assets/css/fontawesome/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="../assets/normalize.css">
<link rel="stylesheet" type="text/css" href="css/stilo.css">
<script src="js/validarRadios.js"></script>
  <meta charset="UTF-8">
   <style>
      h4,.col-sm-12,div{
      text-align: center;
      }
      .dropleft{
      position: absolute;
      right:0%;
      }
      .dropdown-item,.dropdown-menu{
       color: white;
       background-color: #176BD1;
      }
      .btn{
       margin-bottom:1%;
      }
      </style>
</head>    
<!-- /Agregar -->
<html lang="es">

  <div class="contenedor5">
      <h4> Sector Salud </h4>
      <div>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m1">
            Centros de Salud
      </button>

<div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="m1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m1Title"> Centros de Salud </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta6.php" method="POST" name="f6">
      <div class="row">
            <label> Centros de salud que existen </label>
      </div>
    
      <div class="row">
            <select class="form-control" name="centro_salud" id="centro_salud">
            <option>  </option>
            <option> Centro Chamanico </option>
            <option> Ambulatorio Rural 1 </option>
            <option> Ambulatorio Rural 2 </option>
            <option> Módulo de Barrio Adentro </option>
            <option> CDI </option>
            <option> SRI </option>
            <option> Hospital Rural </option>
            <option> Janoko Flotante </option>
            <option> No Tiene </option>
            </select>
      </div>

      <div class="row">
            <label> ¿El centro de salud principal se encuentra? </label>
      </div>
          
      <div class="row">  
            <label>Activo</label><input type="radio" value="Activo" name="estatus" id="estatus" />
            <label> Inactivo </label> <input type="radio" value="Inactivo" name="estatus" id="estatus" />
      </div>      
     
      <div class="row"> 
            <label> ¿Existen servicios de ambulancias en el centro de salud? </label>
      </div> 

      <div class="row">
            <input type="radio" value="si" name="ambulancias" id="ambulancias" />Si
            <input type="radio" value="no" name="ambulancias" id="ambulancias" />No
      </div>
         
      <div class="row">
            <label> Tipos de patologías que afectan a la comunidad </label>   
      </div>

      <div class="row">      
            <select class="form-control" name="patologias">
            <option>  </option>
            <option> Sarampión </option>
            <option> Lechina </option>
            <option> Infecciones Respiratorias </option>
            <option> Diarreas </option>
            <option> Parasitosis </option>
            <option> Malaria </option>
            <option> Paludismo </option>
            <option> Dengue </option>
            <option> Hepatitis </option>
            <option> VIH </option>
            <option> VPH </option>
            <option> Enfermedades Crónicas Degenerativas </option>
            <option> Dermatitis </option>
            <option> Alergias </option>
            <option> Otras </option>
            </select>
      </div>

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-danger">Limpiar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m2">
  Información Pre y Post Natal
</button>


<div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="m2Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m2Title"> Información Pre y Post Natal </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      <form action="../registro_encuesta7.php" method="POST" name="f7">

      <div class="row"> 
            <label> ¿Existen mujeres Embarazadas? </label>
      </div> 

      <div class="row">
            <input type="radio" value="si" name="mujeres_embarazadas" onchange="validarEmbarazadas(this.value);" checked id="mujeres_embarazadas" />Si 
            <input type="radio" value="no" name="mujeres_embarazadas" onchange="validarEmbarazadas(this.value);" checked id="mujeres_embarazadas" />No
      </div>

      <div class="row">
           <label> Indique cuantas </label>
      </div>   

      <div class="row">   
      <input type="text" name="numero_mujeres_embarazadas" id="numero_mujeres_embarazadas" class="form-control" placeholder="Indique cuantas">
      </div>    

      <div class="row">
            <label> ¿Hay Mujeres de 10 años a 17 años Embarazdas? </label> 
      </div>           

      <div class="row">
            <!-- Menores Embarazadas -->
            <input type="radio" value="si" name="mujeres_10_17" onchange="validarMenoresEmbarazadas(this.value);" checked id="Mujeres_10_17"/>Si
            <input type="radio" value="no" name="mujeres_10_17" onchange="validarMenoresEmbarazadas(this.value);" checked id="Mujeres_10_17"/>No
      </div>

      <div class="row">  
            <label> Indique cuantas </label>
      </div>

      <div class="row"> 
            <input type="text" name="numero_menores_embarazadas" id="numero_menores_embarazadas" class="form-control" placeholder="Indique en Número">
      </div>  
              
      <div class="row">  
            <label> ¿Hay Mujeres de 18 años a 25 años Embarazadas? </label> 
      </div>

      <div class="row">  
            <label> Si </label> <input type="radio" value="si" name="mujeres_18_25" onchange="validarJovenesEmbarazadas(this.value);" id="mujeres_18_25" /> 
            <label> No </label> <input type="radio" value="no" name="mujeres_18_25" onchange="validarJovenesEmbarazadas(this.value);" id="mujeres_18_25" />     
      </div>       

      <div class="row">  
            <label> Indique cuantas </label>
      </div>

      <div class="row"> 
            <input type="text" name="numero_jovenes_embarazadas"  id="numero_jovenes_embarazadas" class="form-control " placeholder="Indique en Número">
      </div>

      <div class="row">  
            <label> ¿Hay Mujeres de 26 años a 45 años Embarazadas? </label> 
      </div>
        
      <div class="row">  
            <label> Si </label> <input type="radio" value="si" name="mujeres_26_45" onchange="validarMujeresAdultas(this.value);" id="mujeres_26_45" /> 
            <label> No </label> <input type="radio" value="no" name="mujeres_26_45" onchange="validarMujeresAdultas(this.value);" id="mujeres_26_45" /> 
      </div>
         
      <div class="row">
             <label> Indique cuantas </label>
      </div>
             
      <div class="row">  
            <input type="text" name="numero_adultas_embarazadas" id="numero_adultas_embarazadas" class="form-control" placeholder="Indique en Número"> 
      </div>
            
      <div class="row">
            <label> ¿Existen Parteras? </label> 
      </div>

      <div class="row">   
            <label> Si </label> <input type="radio" value="si" onchange="validarParteras(this.value);" id="parteras" name="parteras" /> 
            <label> No </label> <input type="radio" value="no" onchange="validarParteras(this.value);" id="parteras" name="parteras"  />  
      </div>

      <div class="row">
            <label> Indique cuantos </label> 
      </div>

      <div class="row"> 
              <input type="text" name="numero_parteras" id="numero_parteras" class="form-control" placeholder="Indique en Número">
      </div>

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-danger">Limpiar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m3">
  Lactancia Materna
</button>


<div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="m3Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m3Title"> Lactancia Materna </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta8.php" method="POST" name="f8">
      <div class="row">  
            <label> ¿Práctican lactancia Materna a menores de 6 meses?</label>
      </div>

      <div class="row">    
            <label> Si </label> <input type="radio" name="lactantes" onchange="validarLactancia(this.value);" id="lactantes" value="si" /> 
            <label> No </label> <input type="radio" name="lactantes" onchange="validarLactancia(this.value);" id="lactantes" value="no" />   
      </div>

      <div class="row">
            <label> Indique cuantos</label> 
      </div>  
      
      <div class="row"> 
            <input type="text" name="total_lactante" id="total_lactante" class="form-control" placeholder="Indique en Número"> 
      </div>

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-danger">Limpiar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
    </form>
  </div>
</div>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m4">
  Tasa Natal 
</button>


<div class="modal fade" id="m4" tabindex="-1" role="dialog" aria-labelledby="m4Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m4Title"> Tasa Natal Infantil </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta9.php" method="POST" name="f9">
      <div class="row">             
            <label> Femenino </label>
      </div>      
                   
      <div class="row">  
            <input type="number" name="infantes_femeninos" id="infantes_femeninos" class="form-control" placeholder="Indique en Número">
      </div>  
                 
     <div class="row">             
           <label> Masculino </label>
     </div> 

     <div class="row">  
           <input type="number" name="infantes_masculinos" id="infantes_masculinos" class="form-control" placeholder="Indique en Número">
     </div>  
        
     <div class="row">              
           <label> Indique el total de recién nacidos </label>
     </div>     
                   
     <div class="row">  
           <input type="number" name="nacidos" id="nacidos" class="form-control" placeholder="Indique en Número">
     </div> 

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <button type="reset" class="btn btn-danger">Limpiar</button>
      <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
    </form>
  </div>
</div>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m5">
Personas con Discapacidad
</button>


<div class="modal fade" id="m5" tabindex="-1" role="dialog" aria-labelledby="m5Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m5Title"> Personas con Discapacidad </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta10.php" method="POST" name="f10">
      <div class="row">
            <label> ¿Existen personas con discapacidad?</label>
      </div>
            
      <div class="row" > 
            <label> Si </label> <input type="radio" onchange="validarDispacitados(this.value);" name="discapacidad" value="si" id="discapacidad" /> 
            <label> No </label> <input type="radio" onchange="validarDispacitados(this.value);" name="discapacidad" value="no" id="discapacidad" /> 
      </div>  

      <div class="row">
            <label> ¿Cuantas personas hay con discapacidad? </label>
      </div> 

      <div class="row">
            <input type="text" name="cantidad_discapacidad" id="cantidad_discapacidad" class="form-control" placeholder="Indique cuantas">
      </div>

      <div class="row"> 
            <label> Femenino </label> 
      </div> 

      <div class="row">
            <input type="text" name="discapacidad_femeninas" id="discapacidad_femeninas" class="form-control" placeholder="Indique cuantas">
      </div>

      <div class="row">
            <label> Masculino </label>
      </div>  

      <div class="row">
            <input type="text" name="discapacidad_masculinos" id="discapacidad_masculinos" class="form-control" placeholder="Indique cuantas">
      </div>

      <div class="row">
            <label> Especifique discapacidad </label>
      </div>      
      
      <div class="row">
            <select class="form-control" name="tipo_discapacidad" id="tipo_discapacidad">
            <option>  </option> 
            <option> Visual </option>
            <option> Auditiva </option>
            <option> Físico - Motora </option>
            <option> Intelectual </option>
            <option> Múltiple </option>

            </select>
      </div>            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-danger">Limpiar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
  </form>
</div>



</div>
</div>
</body>
<!-- Agregar -->
<div class="pie">
      <img src="../assets/img/pie.png" class="imagen-pie" alt="">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
  <!-- /Agregar -->
</html>
