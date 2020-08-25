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
        <h4> Actividades Socioproductivas </h4>
      <div class="col-sm-12">


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m1">
  Pesca
</button>


<div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="m1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m1Title"> Tipo de Actividades </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta24.php" method="POST" name="f24">
      <div class="row">
            <label> Pesca </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="pesca" id="pesca" /> 
            <label> No </label> <input type="radio" name="pesca" id="pesca" />
      </div>
    
      <div class="row">
            <label> Tipo de Rubro </label>
      </div>
          
      <div class="row">  
            <input type="text" name="tipo_pesca" id="tipo_pesca" class="form-control" placeholder="Indique el Rubro" />
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
  Caza
</button>


<div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="m2Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m2Title"> Tipo de Actividades </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta25.php" method="POST" name="f25">
      <div class="row"> 
            <label> Caza </label>
      </div> 

      <div class="row">
            <label> Si </label> <input type="radio" name="caza" id="caza" /> 
            <label> No </label> <input type="radio" name="caza" id="caza" />
      </div>

      <div class="row"> 
            <label> Tipo de Rubro </label>
      </div> 

      <div class="row">
            <input type="text" name="tipo_caza" class="form-control" placeholder="Indique el Rubro" />
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
  Artesanía
</button>


<div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="m3Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m3Title"> Tipo de Actividades </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta26.php" method="POST" name="f26">
       <div class="row"> 
            <label> Artesanía </label>
      </div> 

      <div class="row">
            <label> Si </label> <input type="radio" name="artesano" id="artesano" /> 
            <label> No </label> <input type="radio" name="artesano" id="artesano" />
      </div>

      <div class="row"> 
            <label> Tipo de Rubro </label>
      </div> 

      <div class="row">
            <input type="text" name="tipo_artesano" class="form-control" placeholder="Indique en Rubro" />
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
  Agricultura
</button>


<div class="modal fade" id="m4" tabindex="-1" role="dialog" aria-labelledby="m4Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m4Title"> Tipo de Actividades </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta27.php" method="POST" name="f27">
      <div class="row"> 
            <label> Agricultura </label>
      </div> 

      <div class="row">
            <label> Si </label> <input type="radio" name="agricultor" id="agricultor" /> 
            <label> No </label> <input type="radio" name="agricultor" id="agricultor" />
      </div>

      <div class="row"> 
            <label> Tipo de Rubro </label>
      </div> 

      <div class="row">
            <input type="text" name="tipo_agricultor" id="tipo_agricultor" class="form-control" placeholder="Indique en Rubro" />
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
  Cría
</button>


<div class="modal fade" id="m5" tabindex="-1" role="dialog" aria-labelledby="m5Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m5Title"> Tipo de Actividades </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta28.php" method="POST" name="f28">
      <div class="row"> 
            <label> Cría </label>
      </div> 

      <div class="row">
            <label> Si </label> <input type="radio" name="criador" id="criador" /> 
            <label> No </label> <input type="radio" name="criador" id="criador" />
      </div>

      <div class="row"> 
             <label> Tipo de Rubro </label>
      </div> 

      <div class="row">
            <input type="text" name="tipo_crias" id="tipo_crias" class="form-control" placeholder="Indique en Rubro" />
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
