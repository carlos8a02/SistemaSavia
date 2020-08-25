<!DOCTYPE html>
<?php 
session_start();
//1 admin, 2 supervisor  y 3 analista
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
        <h4> Sector Educación </h4>
      
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m1">
  Información de la Comunidad
</button>


<div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="m1Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m1Title"> Información de la Comunidad </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta16.php" method="POST" name="f16">
      <div class="row">
            <label> ¿Existen instituciones educativas? </label>     
      </div>
    
      <div class="row">
            <label> Si </label> <input type="radio" name="instituciones_educativas" id="instituciones_educativas" />
            <label> No </label> <input type="radio" name="instituciones_educativas" id="instituciones_educativas" />
      </div>
          
      <div class="row">  
           <label>¿Cuantos no saben leer ni escribir?</label>
      </div>      
     
      <div class="row"> 
            <input type="text" name="total_analfabetas" id="total_analfabetas" class="form-control" placeholder="Indique la Cantidad" />
      </div> 

      <div class="row">
            <label> Femenino </label>
      </div>
         
      <div class="row">
            <input type="text" name="analfabetas_femeninos" class="form-control" placeholder="Indique en Número" />   
      </div>

      <div class="row">      
            <label> Masculino </label>
      </div>

      <div class="row">      
            <input type="text" name="analfabetas_masculinos" class="form-control"  placeholder="Indique en Número" />
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
   Simoncitos
</button>


<div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="m2Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m2Title"> Instituciones Educativas </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta17.php" method="POST" name="f17">
       <div class="row"> 
            <label> ¿Existen Simoncitos? </label>
      </div> 

      <div class="row">
            <label> Si </label> <input type="radio" name="simoncito" id="simoncito" />
            <label> No </label> <input type="radio" name="simoncito" id="simoncito" />
      </div>

      <div class="row">
           <label> Nombre del Simoncito </label> 
      </div>   

      <div class="row">   
            <input type="text" name="nombre_simoncito" id="nombre_simoncito" class="form-control" placeholder="Ingrese Nombre">
      </div>    

      <div class="row">
            <label> ¿Poseen Bibliotecas? </label> 
      </div>           

      <div class="row">
            <label> Si </label> <input type="radio" name="simoncito_biblioteca" id="simoncito_biblioteca" /> 
            <label> No </label> <input type="radio" name="simoncito_biblioteca" id="simoncito_biblioteca" />  
      </div>

      <div class="row">  
            <label> ¿Poseen Comedor? </label>
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="simoncito_comedor" id="simoncito_comedor" /> 
            <label> No </label> <input type="radio" name="simoncito_comedor" id="simoncito_comedor" />
      </div>  
              
      <div class="row">  
            <label> ¿Poseen Baños? </label>
      </div>

      <div class="row">  
            <label> Si </label> <input type="radio" name="simoncito_banos" id="simoncito_banos" /> 
            <label> No </label> <input type="radio" name="simoncito_banos" id="simoncito_banos" />     
      </div>       

      <div class="row">  
            <label> ¿Poseen Canchas Deportivas? </label>
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="simoncito_canchas" id="simoncito_canchas" /> 
            <label> No </label> <input type="radio" name="simoncito_canchas" id="simoncito_canchas" />
      </div>

      <div class="row">  
            <label> Código del Simoncito </label> 
      </div>
        
      <div class="row">  
            <input type="text" name="codigo_simoncito1" id="codigo_simoncito1" class="form-control" placeholder="Ingrese el codigo" />
      </div>
         
      <div class="row">
             <label> Observación </label>
      </div>

      <div class="row">
             <textarea name="observacion_simoncito" id="observacion_simoncito" class="form-control"></textarea>
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
   Escuelas Primarias
</button>


<div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="m3Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m3Title"> Instituciones Educativas </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta18.php" method="POST" name="f18">
      <div class="row">  
           <label> ¿Existen Escuelas Primarias? </label> 
      </div>
    
      <div class="row">  
            <label> Si </label> <input type="radio" name="escuelas_primarias" id="escuelas_primarias" />
            <label> No </label> <input type="radio" name="escuelas_primarias" id="escuelas_primarias" />
      </div>

      <div class="row">    
           <label> Nombre de la Escuela Primaria </label>  
      </div>

      <div class="row">
            <input type="text" name="nombre_primaria" id="nombre_primaria" class="form-control" placeholder="Ingrese Nombre"> 
      </div>  
      
      <div class="row"> 
            <label> ¿Poseen Bibliotecas? </label> 
      </div>
        
      <div class="row">
            <label> Si </label> <input type="radio" name="primaria_biblioteca" id="primaria_biblioteca" />
            <label> No </label> <input type="radio" name="primaria_biblioteca" id="primaria_biblioteca" /> 
      </div>

      <div class="row">   
            <label> ¿Poseen Comedor? </label>  
      </div>

      <div class="row">
            <label> Si </label> <input type="radio" name="primaria_comedor" id="primaria_comedor" /> 
            <label> No </label> <input type="radio" name="primaria_comedor" id="primaria_comedor" /> 
      </div>

      <div class="row"> 
              <label> ¿Poseen Baños? </label>
      </div>

      <div class="row"> 
             <label> Si </label> <input type="radio" name="primaria_banos" id="primaria_banos" />
             <label> No </label> <input type="radio" name="primaria_banos" id="primaria_banos" /> 
      </div>

      <div class="row"> 
            <label> ¿Poseen Canchas Deportivas? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="primaria_canchas" id="primaria_canchas" /> 
            <label> No </label> <input type="radio" name="primaria_canchas" id="primaria_canchas" />
      </div>

      <div class="row"> 
            <label> Código de la Escuela Primaria </label>  
      </div>

      <div class="row"> 
            <input type="text" name="codigo_escuela" id="codigo_escuela" class="form-control" placeholder="Ingrese el codigo"/> 
      </div>

      <div class="row"> 
            <label> Observación </label> 
      </div>

      <div class="row"> 
            <textarea name="observacion_primaria" id="observacion_primaria" class="form-control"></textarea> 
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
  Liceos
</button>


<div class="modal fade" id="m4" tabindex="-1" role="dialog" aria-labelledby="m4Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m4Title"> Instituciones Educativas </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta19.php" method="POST" name="f19">
      <div class="row"> 
             <label> ¿Existen Liceos? </label>  
      </div>

      <div class="row"> 
             <label> Si </label> <input type="radio" name="liceo" id="liceo" />
             <label> No </label> <input type="radio" name="liceo" id="liceo" />  
      </div>

      <div class="row"> 
            <label> Nombre del Liceo </label>  
      </div>

      <div class="row"> 
            <input type="text" name="nombre_liceo" id="nombre_liceo" class="form-control" placeholder="Ingrese Nombre">
      </div>

      <div class="row"> 
            <label> ¿Poseen Bibliotecas? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="liceo_biblioteca" id="liceo_biblioteca" />
            <label> No </label> <input type="radio" name="liceo_biblioteca" id="liceo_biblioteca" /> 
      </div>

      <div class="row"> 
            <label> ¿Poseen Comedor? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="liceo_comedor" id="liceo_comedor" /> 
            <label> No </label> <input type="radio" name="liceo_comedor" id="liceo_comedor" />  
      </div>

      <div class="row"> 
            <label> ¿Poseen Baños? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="liceo_banos" id="liceo_banos" /> 
            <label> No </label> <input type="radio" name="liceo_banos" id="liceo_banos" />  
      </div>

      <div class="row"> 
            <label> ¿Poseen Canchas Deportivas? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="liceo_canchas" id="liceo_canchas" /> 
            <label> No </label> <input type="radio" name="liceo_canchas" id="liceo_canchas" />  
      </div>

      <div class="row"> 
             <label> Código del Liceo </label>  
      </div>

      <div class="row"> 
            <input type="text" name="codigo_liceo" id="codigo_liceo" class="form-control" placeholder="Ingrese el codigo" />  
      </div>

      <div class="row"> 
            <label> Observación </label>  
      </div>

      <div class="row"> 
            <textarea name="observacion_liceo" id="observacion_liceo" class="form-control"></textarea>  
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
  Escuelas Técnicas
</button>


<div class="modal fade" id="m5" tabindex="-1" role="dialog" aria-labelledby="m5Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m5Title"> Instituciones Educativas </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta20.php" method="POST" name="f20">

      <div class="row"> 
            <label> ¿Existen Escuelas Técnicas? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="escuela_tecnica" id="escuela_tecnica" />
            <label> No </label> <input type="radio" name="escuela_tecnica" id="escuela_tecnica" />  
      </div>

      <div class="row"> 
            <label> Nombre de la Escuela Técnica </label>  
      </div>

      <div class="row"> 
            <input type="text" name="nombre_tecnica" id="nombre_tecnica" class="form-control" placeholder="Ingrese Nombre">  
      </div>

      <div class="row"> 
            <label> ¿Poseen Bibliotecas? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="tecnica_biblioteca" id="tecnica_biblioteca" />
            <label> No </label> <input type="radio" name="tecnica_biblioteca" id="tecnica_biblioteca" />  
      </div>

      <div class="row"> 
            <label> ¿Poseen Comedor? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="tecnica_comedor" id="tecnica_comedor" /> 
            <label> No </label> <input type="radio" name="tecnica_comedor" id="tecnica_comedor" />  
      </div>

      <div class="row"> 
            <label> ¿Poseen Baños? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="tecnica_banos" id="tecnica_banos" /> 
            <label> No </label> <input type="radio" name="tecnica_banos" id="tecnica_banos" />  
      </div>

      <div class="row"> 
            <label> ¿Poseen Canchas Deportivas? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="tecnica_canchas" id="tecnica_canchas" /> 
            <label> No </label> <input type="radio" name="tecnica_canchas" id="tecnica_canchas" />  
      </div>

      <div class="row"> 
            <label> Código de la Escuela Técnica </label>  
      </div>

      <div class="row"> 
            <input type="text" name="codigo_tecnica" id="codigo_tecnica" class="form-control" placeholder="Ingrese el codigo"/>  
      </div>

      <div class="row"> 
            <label> Observación </label>  
      </div>

      <div class="row"> 
            <textarea name="observacion_tecnica" id="observacion_tecnica" class="form-control"></textarea>  
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
  Escuelas Interculturales
</button>


<div class="modal fade" id="m6" tabindex="-1" role="dialog" aria-labelledby="m6Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m6Title"> Instituciones Educativas </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta21.php" method="POST" name="f21">
      <div class="row"> 
            <label> ¿Existen Escuelas Interculturales? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="escuela_interculturales" id="escuela_interculturales" />
            <label> No </label> <input type="radio" name="escuela_interculturales" id="escuela_interculturales" />
      </div>

      <div class="row"> 
            <label> Nombre de la Escuela Intercultural </label>  
      </div>

      <div class="row"> 
            <input type="text" name="nombre_intercultural" id="nombre_intercultural" class="form-control" placeholder="Ingrese Nombre">  
      </div>

      <div class="row"> 
            <label> ¿Poseen Bibliotecas? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="intercultural_bibliotecas" id="intercultural_bibliotecas" /> 
            <label> No </label> <input type="radio" name="intercultural_bibliotecas" id="intercultural_bibliotecas" /> 
      </div>

      <div class="row"> 
            <label> ¿Poseen Comedor? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="intercultural_comedor" id="intercultural_comedor" /> 
            <label> No </label> <input type="radio" name="intercultural_comedor" id="intercultural_comedor" />  
      </div>

      <div class="row"> 
            <label> ¿Poseen Baños? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="intercultural_banos" id="intercultural_banos" />
            <label> No </label> <input type="radio" name="intercultural_banos" id="intercultural_banos" />  
      </div>

      <div class="row"> 
            <label> ¿Poseen Canchas Deportivas? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="intercultural_canchas" id="intercultural_canchas" /> 
            <label> No </label> <input type="radio" name="intercultural_canchas" id="intercultural_canchas" />  
      </div>

      <div class="row"> 
            <label> Código de la Escuela Intercultural </label>  
      </div>

      <div class="row"> 
            <input type="text" name="codigo_intercultural" id="codigo_intercultural" class="form-control" placeholder="Ingrese el codigo"/>
      </div>

      <div class="row"> 
            <label> Observación </label>  
      </div>

      <div class="row"> 
            <textarea name="observacion_intercultutal" id="observacion_intercultural" class="form-control"></textarea>  
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
   Aldeas Universitarias
</button>


<div class="modal fade" id="m7" tabindex="-1" role="dialog" aria-labelledby="m7Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m7Title"> Instituciones Educativas </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta22.php" method="POST" name="f22">
      <div class="row"> 
             <label> ¿Existen Aldeas Universitarias? </label> 
      </div>

      <div class="row"> 
             <label> Si </label> <input type="radio" name="universidad" id="universidad" />
             <label> No </label> <input type="radio" name="universidad" id="universidad" /> 
      </div>

      <div class="row"> 
            <label> Nombre de la Aldea Universitaria </label> 
      </div>

      <div class="row"> 
            <input type="text" name="nombre_universidad" id="nombre_universidad" class="form-control" placeholder="Ingrese Nombre">  
      </div>

      <div class="row"> 
            <label> ¿Poseen Bibliotecas? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="universidad_bibliotecas" id="universidad_bibliotecas" /> 
            <label> No </label> <input type="radio" name="universidad_bibliotecas" id="universidad_bibliotecas" />  
      </div>

      <div class="row"> 
            <label> ¿Poseen Comedor? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="universidad_comedor" id="universidad_comedor" /> 
            <label> No </label> <input type="radio" name="universidad_comedor" id="universidad_comedor" />  
      </div>

      <div class="row"> 
            <label> ¿Poseen Baños? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="universidad_banos" id="universidad_banos" />
            <label> No </label> <input type="radio" name="universidad_banos" id="universidad_banos" />
      </div>

      <div class="row"> 
            <label> ¿Poseen Canchas Deportivas? </label>  
      </div>

      <div class="row"> 
            <label> Si </label> <input type="radio" name="universidad_canchas" id="universidad_canchas" /> 
            <label> No </label> <input type="radio" name="universidad_canchas" id="universidad_canchas" /> 
      </div>

      <div class="row"> 
             <label> Código de la Aldea Universitaria </label> 
      </div>

      <div class="row"> 
            <input type="text" name="codigo_universidad" id="codigo_universidad" class="form-control" placeholder="Ingrese el codigo" />  
      </div>

      <div class="row"> 
            <label> Observación </label>  
      </div>

      <div class="row"> 
            <textarea name="observacion_universidad" id="observacion_universidad" class="form-control"></textarea>  
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
  Características Adicionales
</button>


<div class="modal fade" id="m8" tabindex="-1" role="dialog" aria-labelledby="m8Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="m8Title" align="left"> Características Adicionales de las Instituciones </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="../registro_encuesta23.php" method="POST" name="f23">
      <div class="row">             
            <label> ¿En las inst. educativas usan el traje típico como uniforme? </label>
      </div>      
                   
      <div class="row">  
            <label> Si </label> <input type="radio" name="traje_tipico" id="traje_tipico" /> 
            <label> No </label> <input type="radio" name="traje_tipico" id="traje_tipico" />
      </div>  
                 
     <div class="row">             
           <label> ¿Utilizan la lengua materna en las instituciones educativas? </label>
     </div>  
        
     <div class="row">              
            <label> Si </label> <input type="radio" name="lengua_materna" id="lengua_materna" /> 
            <label> No </label> <input type="radio" name="lengua_materna" id="lengua_materna" />
     </div>  

     <div class="row">   
            <input type="text" name="lenguas_materna" id="lenguas_maternas" class="form-control" placeholder="Indique cuantas lenguas se hablan">
     </div>    
                   
     <div class="row">  
           <label> ¿Aplican el sistema intercultural bilingue? </label>
     </div> 

     <div class="row">  
           <label> Si </label> <input type="radio" name="sistema_bilingue" id="sistema_bilingue" />
           <label> No </label> <input type="radio" name="sistema_bilingue" id="sistema_bilingue" />
     </div> 

     <div class="row">  
           <label> ¿Existen niños (as) de 7 a 12 años que no asisten a la escuela? </label>
     </div>

     <div class="row">  
           <label> Si </label> <input type="radio" name="menores_sin_estudio" id="menores_sin_estudio" />
           <label> No </label> <input type="radio" name="menores_sin_estudio" id="menores_sin_estudio" />
     </div>

     <div class="row">  
           <label> Diga cuantos no asisten </label>
     </div>

     <div class="row">  
           <input type="text" name="total_menores" id="total_menores" class="form-control" placeholder="Indique en Números" />
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
