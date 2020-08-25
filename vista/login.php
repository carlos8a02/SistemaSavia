<!DOCTYPE html>
<?php 
session_start();
//1 admin, 2 supervisor y 3 analista
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 1) :
        header("location:admin.php");
      elseif ($_SESSION["usuario"]["privilegio"] == 2) :
        header("location:index.php");
        elseif ($_SESSION["usuario"]["privilegio"] == 3) :
        header("location:encuestas/vista_1.php");
        endif;
  }
?>
<html lang="es">
<head>
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/normalize.css">

    <link rel="stylesheet" href="assets/css/masterLogin.css">

    <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
</head>
<body>
    <header>
        <img src="assets/img/cabezera.png" class="imagen-cabezera" alt="cabezera">
    </header>
   
    <div class="login-box">
        <a href="../index.html" id="logo">  <img class="avatar" src="assets/img/logo.png" alt="logo" ></a>
           <h1>Iniciar sesion</h1>
           <form id="loginForm" action="validarCode.php" method="POST" role="form">
               <!--Nombre Usuario-->
               <label for="username">Usuario  <i class="fas fa-user"></i>: </label>
               <input type="text" name="txtUsuario" id="usuario" autofocus required placeholder="Usuario">
               <!--/Nombre Usuario-->
   
               <!--Contrasena-->
               <label for="password">Contraseña <i class="fas fa-key"></i>:</label>
               <input type="password" name="txtPassword" required id="password" placeholder="****">
               <!--/Contrasena-->
   
              <input type="submit" value="Iniciar Sesion">
               
               <!--Otros metodos-->
               <div class="o">
                <span>ó</span>
            </div> 
               <br>
               <a href="registro.php">¿No tienes una Cuenta?</a>
               <!--/Otros metodos-->
           </form>
       </div>
    <div class="pie">
        <img src="assets/img/pie.png" class="imagen-pie" alt="">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/app.js"></script>
    </div>
</body>
</html>