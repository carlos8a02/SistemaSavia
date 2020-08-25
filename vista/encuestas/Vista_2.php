<!DOCTYPE html>
<!-- Agregar -->
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
            .btn{
              margin-bottom:1%;
            }
      </style>
</head>    
<!-- /Agregar -->
  <div class="contenedor5">
        <h4> Distribución de la Población </h4>
        <div class="col-sm-12 ">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m1">
  Distribución de la Población
</button>


<div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="m1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m1Title"> Información de la Población </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      <form action="../registro_encuesta5.php" method="POST" name="f5">
      <div class="row">
            <label> Total de hábitantes indígenas </label>
      </div> 

      <div class="row">
            <input type="number" name="total_habitantes_indigenas" onchange="validarHabitantes(this.value);" id="total_habitantes_indigenas" class="form-control" placeholder="Indique el total">
      </div>
      
      <div class="row">
            <label> ¿Todos los niños poseen acta de nacimiento? </label>
      </div>

      <div class="row">
            <input type="radio" value="si" name="actas_nacimiento" onchange="validarActa(this.value);" check id="actas_nacimiento" />Si
            <input type="radio" value="no" name="actas_nacimiento" onchange="validarActa(this.value);" id="actas_nacimiento" />No
      </div>

      <div class="row">
            <label> ¿Cuantos no poseen? </label>
      </div>

      <div class="row">
            <input type="text" name="numero_actas" class="form-control" id="numero_actas" placeholder="Indique cuantos">
      </div>

      <div class="row">
            <label> ¿Poseen todos cédula de indentidad? </label>
      </div>

      <div class="row">
            <input type="radio" value="si" name="cedulas_identidad" onchange="validarCedulas(this.value);" check id="cedulas_identidad" />Si
            <input type="radio" value="no" name="cedulas_identidad" onchange="validarCedulas(this.value);" id="cedulas_identidad" />No
      </div>

      <div class="row">
            <label> ¿Cuantos no poseen? </label>
      </div>

      <div class="row">
            <input type="text" name="numero_cedulas" id="numero_cedulas" class="form-control" placeholder="Indique cuantos">
      </div>

      <div class="row">
           <label> Femenino </label>
      </div>

      <div class="row">
            <input type="text" name="numero_femeninos" id="numero_femeninos"  class="form-control" placeholder="Indique cuantos">
      </div>

      <div class="row">
            <label> Masculino </label>
      </div>

      <div class="row">
            <input type="text" name="numero_masculinos" id="numero_masculinos"  class="form-control" placeholder="Indique cuantos">
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
<!-- Agregar -->
<div class="pie">
<img src="../assets/img/pie.png" class="imagen-pie" alt="">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="js/jquery-3.4.1.js"></script>
</div>
  <!-- /Agregar -->
</html>
