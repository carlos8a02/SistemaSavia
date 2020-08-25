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

  <div class="contenedor5">
        <h4> Saberes Ancestrales en la Comunidad </h4>
      <div class="col-sm-12">


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m1">
   Práctica Ancestral en la Comunidad
</button>

<div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="m1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m1Title"> Práctica Ancestral en la Comunidad </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta46.php" method="POST" name="f46">
      <div class="row">
            <label> ¿Que saber ancestral práctica la comunidad? </label>
      </div>

      <div class="row">
            <input type="text" name="saber_ancestral" id="saber_ancestral" class="form-control"placeholder="Especifique cual saber ancestral se práctica" />
      </div>
    
      <div class="row">
            <label> ¿Existen sitios sagrados? </label>
      </div>
          
      <div class="row">  
            <label> Si </label> <input type="radio" name="sitios_sagrados" id="sitios_sagrados" /> 
            <label> No </label> <input type="radio" name="sitios_sagrados" id="sitios_sagrados" />
      </div>

      <div class="row"> 
            <label> ¿Especifique cuantos sitios sagrados hay? </label>
      </div> 

      <div class="row">
            <input type="text" name="total_sitios_sagrados" id="total_sitios_sagrados" class="form-control" placeholder="Indique en Números" />
      </div>

      <div class="row"> 
            <label> ¿Que tipo de rituales práctican? </label>
      </div> 

      <div class="row">
            <input type="text" name="tipos_rituales" id="tipos_rituales" class="form-control" placeholder="Especifique los rituales" />
      </div>

      <div class="row"> 
            <label> ¿Que estrategias usan para conservar los saberes ancestrales? </label>
      </div> 

      <div class="row">
            <input type="text" name="conservar_saberes_ancestrales" id="conservar_saberes_ancestrales" class="form-control" placeholder="Métodos que se utilizan"/> 
      </div>

      <div class="row"> 
           <label> ¿Como se transmiten los saberes ancestrales ? </label>
      </div> 

      <div class="row">
            <input type="text" name="transmicion_saberes_ancestrales" id="transmicion_saberes_ancestrales" class="form-control" placeholder="¿de que manera?"/>
      </div>

      <div class="row"> 
            <label> ¿La comunidad imparte los saberes ancestrales? </label>
      </div> 

      <div class="row">
            <label> Si </label> <input type="radio" name="comunidad_imparte" id="comunidad_imparte" /> 
            <label> No </label> <input type="radio" name="comunidad_imparte" id="comunidad_imparte" />
      </div>

      <div class="row"> 
            <label> ¿Como se práctica el saber ancestral en la comunidad? </label>
      </div> 

      <div class="row">
            <label> INDIVIDUAL </label> <input type="radio" value="individual" name="practicas_ancestrales" id="practicas_ancestrales" /> 
            <label> COLECTIVA </label>  <input type="radio" value="colectiva" name="practicas_ancestrales" id="practicas_ancestrales" />
      </div>
 
      <div class="row"> 
            <label> ¿Que religión se práctica en la comunidad? </label>
      </div> 

      <div class="row">
            <input type="text" name="religion_comunidad" id="religion_comunidad" class="form-control" placeholder="Especifique la religión" />
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
</div>


  
</body>
<div class="pie">
      <img src="../assets/img/pie.png" class="imagen-pie" alt="">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
</html>
