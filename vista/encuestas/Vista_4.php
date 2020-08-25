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
    <h4> Fuentes de Empleo </h4>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m8">
      Comercio
    </button>

  <div class="modal fade" id="m8" tabindex="-1" role="dialog" aria-labelledby="m8Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="m8Title"> Fuentes de Empleo </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="../registro_encuesta11.php" method="POST" name="f11">
          <div class="row">
            <label> ¿Existen Instituciones del Comercio? </label>
          </div> 

          <div class="row">
            <label> Si </label> <input type="radio" value="si" name="comercio" id="comercio" /> 
            <label> No </label> <input type="radio" value="no" name="comercio" id="comercio" />
          </div> 


          <div class="row">
            <label>Indique que tipo de comercio </label>
      </div> 

      <div class="row">
            <input type="text" name="tipos_comercios" id="tipos_comercios" class="form-control" placeholder="Publico,Privado o Ambos">
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

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m10">
    Cuenta Propia
  </button>
    <div class="modal fade" id="m10" tabindex="-1" role="dialog" aria-labelledby="m10Title" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="m10Title"> Fuentes de Empleo </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="../registro_encuesta12.php" method="POST" name="f12">
          <div class="row">
             <label> ¿Existen Empleos por Cta. Propia? </label>
          </div> 

          <div class="row">
           <label> Si </label> <input type="radio" value="si" name="cuenta_propia" id="cuenta_propia" /> 
           <label> No </label> <input type="radio" value="no" name="cuenta_propia" id="cuenta_propia" />
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

<div class="contenedor5">
    <h4> Condiciones Socioeconómicas </h4>
<div>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m1">
  Tipos de Viviendas
</button>


<div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="m1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m1Title"> Tipos de Viviendas </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta13.php" method="POST" name="f13">
          <div class="row">
                <label> ¿Cuantas existen? </label>
          </div>
          <div class="row">
                <input type="text" name="vivienda" id="vivienda" class="form-control" placeholder="Indique en Números">          </div>
          <div class="row">
                <label> Tipos </label>
          </div> 
          <div class="row">  
                <select class="form-control" name="tipos_vivienda" id="tipos_vivienda"> 
                <option >       </option> 
                <option> Quinta </option>
                <option> Casa </option>
                <option> Apartamento </option>
                <option> Anexo </option>
                <option> Refugio </option>
                <option> Rancho </option>
                <option> Colectividad </option>
                </select>
          </div>      
          <div class="row"> 
                <label> Otras </label>
          </div> 
          <div class="row">
                <select class="form-control" name="otras_vivienda" id="otras_vivienda"> 
                <option>           </option> 
                <option> Palafitos </option>
                <option> Janokos </option>
                <option> Churuatas </option>
                <option> Shaponos </option>
                <option> Maloka o Waipa </option>
                <option> Tepuy </option>
                <option> Tapurupa </option>
                <option> Ruka </option>
                <option> Bohios o Chozas </option>
                </select>
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


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m2">
  Servicios
</button>


<div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="m2Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="m2Title"> Servicios </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta14.php" method="POST" name="f14">
          <div class="row">
              <label> Agua Potable </label> 
          </div>
      <div class="row"> 
            <select class="form-control" name="agua" id="agua">
            <option>         </option>  
            <option> Directo </option>
            <option> No Tiene </option>
            </select>
      </div> 

      <div class="row">
            <label> Servicio de Gas </label> 
      </div>

      <div class="row">
            <select class="form-control" name="gas" id="gas">
            <option>         </option>  
            <option> Directo </option>
            <option> Bombona </option> 
            <option> No Tiene </option>
            </select>
      </div>
 
      <div class="row">
            <label> Electricidad </label> 
      </div>

      <div class="row">
           <select class="form-control" name="electricidad" id="electricidad">
           <option>      </option> 
           <option> Red Eléctrica </option>
           <option> Planta de Combustible </option>
           <option> Paneles Solares </option>
           <option> No Tiene </option>
           </select>
      </div>   

      <div class="row">
            <label> Aseo Urbano </label> 
      </div>

      <div class="row">   
            <select class="form-control" name="aseo" id="aseo">
            <option>  </option>
            <option> Quema de Desechos </option>
            <option> Basurero </option>
            <option> Aseo Urbano </option>
            <option> No Tiene </option>
            </select>
      </div>    

      <div class="row">
            <label> Acceso a la Comunidad </label> 
      </div>

      <div class="row">
            <select class="form-control" name="acceso_comunidad" id="acceso_comunidad">
            <option>  </option> 
            <option> Aéreo </option>
            <option> Fluvial </option>
            <option> Terrestre </option>
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



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m11">
   Menores Trabajando
</button>


<div class="modal fade" id="m11" tabindex="-1" role="dialog" aria-labelledby="m10Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m11Title"> Fuentes de Empleo </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta15.php" method="POST" name="f15">
      <div class="row">
           <label> ¿Existen niños menores de 15 años trabajando? </label>
     </div> 

     <div class="row">
          <label> Si </label> <input type="radio" name="ninos_menores" id="ninos_menores" /> 
          <label> No </label> <input type="radio" name="ninos_menores" id="ninos_menores" />
     </div>

     <div class="row">
           <label> Indique cuantos </label>
     </div>

     <div class="row">
           <input type="text" name="total_menores" id="total_menores" class="form-control">
     </div>

     <div class="row">
           <label> ¿Porque? </label>
     </div> 
 
     <div class="row">
           <input type="text" name="detalles_empleo" id="detalles_empleo" class="form-control">
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

  </div>





</body>
<div class="pie">
      <img src="../assets/img/pie.png" class="imagen-pie" alt="">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
</html>
