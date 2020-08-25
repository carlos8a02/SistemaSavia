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
      echo $_SESSION["usuario"]["usuario"]." <i class='fas fa-user'></i>"."</span>";
    ?>
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="../cerrar-sesion.php"><i class='fa fa-sign-out-alt'></i> Cerrar Sesion</a>
      
  </div>
</div>
<!-- / boton usuario -->
<br>
<html lang="es">
<meta charset="UTF-8">
<head>
      <link rel="stylesheet" href="../assets/css/fontawesome/css/all.css">
      <link rel="stylesheet" href="../assets/css/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="../assets/normalize.css">
      <link rel="stylesheet" type="text/css" href="css/stilo.css">
      <script src="js/validarMunicipios.js"></script>
      <script src="js/validarRadios.js"></script>
</head>  
   
<div class="contenedor5">
      <h4 > Identificación de la Comunidad </h4>
      <style>
            h4,.col-sm-12{
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
      </style>
<div class="col-sm-12">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m1">
  Distribución Geográfica
</button>

<div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="m1Title" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="m1Title"> Distribución Geográfica </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
            <div class="modal-body">
            <form action="../registro_encuesta.php" method="POST" name="f1">
            <div class="row">
            <label> Estado </label>
      </div>   
      <div class="row">  
            <input type="text" name="estado" id="estado" class="form-control" disabled="disabled" placeholder="Anzoategui">
      </div>      
     
      <div class="row"> 
            <label> Municipio </label>
      </div>

       <div class="row"> 
       <select class="form-control" name=municipios id="municipios"  onchange="cambia_parroquias()"  required> 
            <option value="" selected>Seleccione... 
            <option value="1">Anaco 
            <option value="2">Aragua 
            <option value="3">Diego Bautista Urbaneja 
            <option value="4">Fernando Peñalver 
            <option value="5">Francisco del Carmen Carvajal 
            <option value="6">Francisco de Miranda
            <option value="7">Guanipa
            <option value="8">Guanta 
            <option value="9">Independencia 
            <option value="10">José Gregorio Monagas
            <option value="11">Juan Antonio Sotillo
            <option value="12">Juan Manuel Cajigal
            <option value="13">Libertad
            <option value="14">Manuel Ezequiel Bruzual
            <option value="15">Pedro María Freitas
            <option value="16">Píritu
            <option value="17">San Juan de Capristano 
            <option value="18">Santa Ana
            <option value="19">Simón Bolívar
            <option value="20">Simón Rodríguez
            <option value="21">General Sir Arthur McGregor
    </select>
      </div>
      <div class="row"> 
            <label> Parroquia </label>
      </div>
      <div class="row">        
            <select class="form-control" name=parroquias required> 
            <option value="-">- 
          </select> 
      </div> 
      
      <!--// Municipios y parroquias-->
            <div class="row"> 
                  <label> Sector </label>
            </div>
      <div class="row"> 
            <input type="text" name="sector" id="sector" class="form-control"  placeholder="Indique el sector" required>
      </div>
      
      <div class="row"> 
            <label> Nombre de la Comunidad </label>
      </div>
      
      <div class="row"> 
            <input type="text" name="nombre_comunidad" id="nombre_comunidad" class="form-control"  placeholder="Indique el nombre de la comunidad" required>
      </div>

      <div class="row">
            <label> Pueblo Indígena</label> 
      </div>  

      <div class="row">
            <input type="text" name="nombre_indigena" id="nombre_indigena" class="form-control" placeholder="Ingrese el pueblo" required>
      </div>

      <div class="row">
            <label> Tipo de Grupo </label>
      </div>

      <div class="row">
            <select name="grupo" id="grupo" class="form-control" required>
              <option>  </option>
              <option> Clan </option>
              <option> Sub-grupo </option>
              <option> No Aplica </option>
            </select>
      </div>

      </div>
      <div class="modal-footer">
      
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-danger">Limpiar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
            </div>
            </div>
      </div>
</div>




<button type="button" class="btn btn-primary" data-toggle="modal" id="comunales" data-target="#m2">
  Organizaciones Comunales
</button>


<div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="m2Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m2Title"> Organizaciones Comunales </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      <form action="../registro_encuesta2.php" method="POST" name="f2">
<div class="row">
            <label> ¿Existen bases de misiones? </label>
      </div>

      <div class="row">
            <input type="radio" value="si" name="base_misiones" onchange="validarBaseMisiones(this.value);" checked id="base_misiones" required />Si 
            <input type="radio" value="no" name="base_misiones" onchange="validarBaseMisiones(this.value);" id="base_misiones" required />No
      </div>
        
      <div class="row">  
            <input type="text" name="inf1" id="inf1" class="form-control" placeholder="Indique el nombre" required>
      </div>      
     
      <div class="row"> 
            <label> ¿Existen consejos comunal? </label>
      </div>

       <div class="row"> 
            <input type="radio" value="si" name="consejo_comunal" onchange="validarConsejoComunal(this.value);" checked  id="consejo_comunal" required/>Si
            <input type="radio" value="no" name="consejo_comunal" onchange="validarConsejoComunal(this.value);" id="consejo_comunal" required/>No
      </div>

       <div class="row"> 
            <input type="text" name="inf2" id="inf2" class="form-control"  placeholder="Indique el nombre" required>
      </div>

       <div class="row"> 
             <label> Tipos de Consejos comunales </label>
      </div>

       <div class="row"> 
            <input type="radio" value="mixto" name="tipo_de_consejo_comunal" id="tipo_de_consejo_comunal" />Mixto
            <input type="radio" value="indigena" name="tipo_de_consejo_comunal" id="tipo_de_consejo_comunal" />Indigena
      </div> 

      <div class="row"> 
            <label> ¿El consejo comunal pertenece a una comuna? </label>
      </div>

      <div class="row"> 
            <input type="radio" value="si" name="pertenece_a_una_comunidad" id="pertenece_a_una_comunidad" />Si
            <input type="radio" value="no" name="pertenece_a_una_comunidad" id="pertenece_a_una_comunidad" />No
      </div>

      <div class="row"> 
            <label> Existe Comité Indígena </label>
      </div>

      <div class="row"> 
            <input type="radio" value="si" name="comite_indigena" id="comite_indigena" />Si
            <input type="radio" value="no" name="comite_indigena" id="comite_indigena" />No
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





<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m3">
  Autoridades Indígenas
</button>


<div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="m3Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m3Title"> Autoridades Indígenas </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta3.php" method="POST" name="f3">
<div class="row">
            <label> Nombre del Vocero Presidencial Indígena </label> 
      </div>  

      <div class="row">
            <input type="text" name="nombre_vocero" class="form-control" placeholder="Ingrese el nombre">
      </div>

      <div class="row">
            <label> Nombre de la autoridad legítima </label>
      </div>

      <div class="row">
            <input type="text" name="nombre_autoridad_legitima" class="form-control" placeholder="Ingrese el nombre">
      </div>

      <div class="row">
            <label> Cargo de la autoridad legítima </label>
      </div>

      <div class="row">
      <input type="radio" value="cacique" name="cargo_autoridad_legitima" id="cargo_autoridad_legitima" />Cacique
      <input type="radio" value="capitan" name="cargo_autoridad_legitima" id="cargo_autoridad_legitima" />Capitán
      </div>

      <div class="row">
            <label> Teléfono de contacto </label>
      </div>

      <div class="row">.
      <input type="number" name="numero_de_telefono" class="form-control" placeholder="Ingrese el numero">
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



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m4">
  Estado Civil
</button>


<div class="modal fade" id="m4" tabindex="-1" role="dialog" aria-labelledby="m4Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m4Title"> Estado Civil </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta4.php" method="POST" name="f4">
      <div class="row">
             <label> Unidos </label>
      </div>

      <div class="row"> 
            <input type="number" name="unidos" class="form-control" placeholder="Indique cuantos">
      </div> 

      <div class="row">
            <label> Casados </label>
      </div>

      <div class="row">
            <input type="number" name="casados" class="form-control" placeholder="Indique cuantos">
      </div>
 
      <div class="row">
             <label>  Solteros </label>
      </div>

      <div class="row">
            <input type="number" name="solteros" class="form-control" placeholder="Indique cuantos">
      </div>     

      <div class="row">
            <label>  Divorciados </label>
      </div>

      <div class="row">
            <input type="number" name="divorciados" class="form-control" placeholder="Indique cuantos">
      </div>           

      <div class="row">
            <label>  Viudos </label>  
      </div> 

      <div class="row">  
            <input type="number" name="viudos" class="form-control" placeholder="Indique cuantos">
      </div>

      <div class="row">
            <label> Otros </label>  
      </div> 

      <div class="row">  
            <input type="text" name="otros" class="form-control" placeholder="Indique">
      </div> 

      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="reset" class="btn btn-danger">Limpiar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>
      </div>
    </div>
  </div>
</div>

<!-- 
</form> -->




</div>
</div>

</body>
<div class="pie">
      <img src="../assets/img/pie.png" class="imagen-pie" alt="">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="js/jquery-3.4.1.js"></script>
</div>
</html>
