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
<html lang="es">
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
        <h4> Sistemas de Misiones en la Comunidad </h4>
  <div>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m1">
     Mercal
  </button>

<div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="m1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m1Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta45.php" method="POST" name="f45">
      <div class="row">
            <label> Mercal </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="mercal" id="mercal" /> 
            <label> No </label> <input type="radio" name="mercal" id="mercal" />
      </div>
    
      <div class="row">
            <label> Total de beneficiados </label>
      </div>
          
      <div class="row">  
            <input type="text" name="beneficiados_mercal" id="beneficiados_mercal" class="form-control" placeholder="indique cuantos" />
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
  Pdval
</button>


<div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="m2Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m2Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta30.php" method="POST" name="f30">
      <div class="row"> 
            <label> Pdval </label>
      </div> 

      <div class="row">
            <label> Si </label> <input type="radio" name="pdval" id="pdval" /> 
            <label> No </label> <input type="radio" name="pdval" id="pdval" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_pdval" id="beneficiados_pdval" class="form-control" placeholder="indique cuantos" />
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
  Hogares de la Patria
</button>


<div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="m3Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m3Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta31.php" method="POST" name="f31">
      <div class="row">
            <label> Hogares de la Patria </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="hogares_patria" id="hogares_patria" /> 
            <label> No </label> <input type="radio" name="hogares_patria" id="hogares_patria" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_hogares_patria" class="form-control" placeholder="indique cuantos" />
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
  Amor Mayor
</button>


<div class="modal fade" id="m4" tabindex="-1" role="dialog" aria-labelledby="m4Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m4Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta32.php" method="POST" name="f32">
       <div class="row">
            <label> Amor Mayor </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="amor_mayor" id="amor_mayor" /> 
            <label> No </label> <input type="radio" name="amor_mayor" id="amor_mayor" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_amor_mayor" class="form-control" placeholder="indique cuantos" />
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
  Pensionados
</button>


<div class="modal fade" id="m5" tabindex="-1" role="dialog" aria-labelledby="m5Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m5Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta33.php" method="POST" name="f33">
      <div class="row">
            <label> Pensionados </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="pensionados" id="pensionados" /> 
            <label> No </label> <input type="radio" name="pensionados" id="pensionados" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_pensionados" class="form-control" placeholder="indique cuantos" />
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




<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m6">
  CLAP
</button>

<div class="modal fade" id="m6" tabindex="-1" role="dialog" aria-labelledby="m6Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m6Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta34.php" method="POST" name="f34">
       <div class="row">
            <label> CLAP </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="clap" id="clap" /> 
            <label> No </label> <input type="radio" name="clap" id="clap" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_clap" class="form-control" placeholder="indique cuantos" />
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



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m7">
  José Gregorio Hernández
</button>


<div class="modal fade" id="m7" tabindex="-1" role="dialog" aria-labelledby="m7Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m7Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta35.php" method="POST" name="f35">
      <div class="row">
            <label> José Gregorio Hernández </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="jgh" id="jgh" /> 
            <label> No </label> <input type="radio" name="jgh" id="jgh" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_jgh" class="form-control" placeholder="indique cuantos" />
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



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m8">
  Milagro
</button>


<div class="modal fade" id="m8" tabindex="-1" role="dialog" aria-labelledby="m8Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m8Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta36.php" method="POST" name="f36">
       <div class="row">
            <label> Milagro </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="milagro" id="milagro" /> 
            <label> No </label> <input type="radio" name="milagro" id="milagro" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_milagro" class="form-control" placeholder="indique cuantos" />
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

          

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m9">
  Negra Hipólita
</button>


<div class="modal fade" id="m9" tabindex="-1" role="dialog" aria-labelledby="m9Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m9Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta37.php" method="POST" name="f37">
     <div class="row">
            <label> Negra Hipólita </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="negra_hipolita" id="negra_hipolita" /> 
            <label> No </label> <input type="radio" name="negra_hipolita" id="negra_hipolita" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_negra_hipolita" id="beneficiados_negra_hipolita" class="form-control" placeholder="indique cuantas" />
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



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m10">
  Ribas Robinsón Sucre
</button>


<div class="modal fade" id="m10" tabindex="-1" role="dialog" aria-labelledby="m10Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m10Title"> Misiones </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta38.php" method="POST" name="f38">
      <div class="row">
            <label> Ribas Robinson Sucre </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="mision_ribas" id="mision_ribas" /> 
            <label> No </label> <input type="radio" name="mision_ribas" id="mision_ribas" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_ribas" id="beneficiados_ribas" class="form-control" placeholder="indique cuantos" />
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


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m11">
  Vivienda Venezuela
</button>


<div class="modal fade" id="m11" tabindex="-1" role="dialog" aria-labelledby="m11Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m11Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta39.php" method="POST" name="f39">
     <div class="row">
            <label> Vivienda Venezuela </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="viviendas" id="viviendas" /> 
            <label> No </label> <input type="radio" name="viviendas" id="viviendas" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_viviendas" id="beneficiados_vivendas" class="form-control" placeholder="indique cuantos" />
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



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m12">
  Carnet de la Patria
</button>


<div class="modal fade" id="m12" tabindex="-1" role="dialog" aria-labelledby="m12Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m12Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta40.php" method="POST" name="f40">
      <div class="row">
            <label> Carnet de la Patria </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="carnet" id="carnet" /> 
            <label> No </label> <input type="radio" name="carnet" id="carnet" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_carnet" id="beneficiados_carnet" class="form-control" placeholder="indique cuantos" />
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




<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m13">
  Plan Semilla
</button>


<div class="modal fade" id="m13" tabindex="-1" role="dialog" aria-labelledby="m13Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m13Title"> misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta41.php" method="POST" name="f41">
       <div class="row">
            <label> Plan Semilla </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="semillas" id="semillas" /> 
            <label> No </label> <input type="radio" name="semillas" id="semillas" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_semilla" id="beneficiados_semilla" class="form-control" placeholder="indique cuantos" />
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





<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m14">
  Nevado
</button>


<div class="modal fade" id="m14" tabindex="-1" role="dialog" aria-labelledby="m14Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m14Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta42.php" method="POST" name="f42">
       <div class="row">
            <label> Nevado </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="nevados" id="nevados" /> 
            <label> No </label> <input type="radio" name="nevados" id="nevados" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_nevado" id="beneficiados_nevado" class="form-control" placeholder="indique cuantos" />
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





<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m15">
  Casa de Alimentación
</button>


<div class="modal fade" id="m15" tabindex="-1" role="dialog" aria-labelledby="m15Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m15Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta43.php" method="POST" name="f43">
       <div class="row">
            <label> Casa de Alimentación </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="alimentacion" id="alimentacion" /> 
            <label> No </label> <input type="radio" name="alimentacion" id="alimentacion" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>

      <div class="row">
            <input type="text" name="beneficiados_alimentacion" id="" class="form-control" placeholder="indique cuantos" />
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



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m16">
  Agrovenezuela
</button>


<div class="modal fade" id="m16" tabindex="-1" role="dialog" aria-labelledby="m16Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m16Title"> Misión </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta44.php" method="POST" name="f44">
       <div class="row">
            <label> Agrovenezuela </label>
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="agro" id="agro" /> 
            <label> No </label> <input type="radio" name="agro" id="agro" />
      </div>

      <div class="row">
            <label> Total de beneficiados </label>
      </div>  
      
      <div class="row">
            <input type="text" name="beneficiados_agro" class="form-control" placeholder="indique cuantos" />
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
</div>

</body>
<div class="pie">
      <img src="../assets/img/pie.png" class="imagen-pie" alt="">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
</html>      
