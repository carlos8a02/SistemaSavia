<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php session_start();?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <!-- CDN fontaweson y normalize -->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- /CDN fontaweson y normalize -->
    
    <!-- Archivos Offline
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/fontawesome/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/normalize.css">
     -->
    <link rel="stylesheet" href="assets/css/styleSingUp2.css">

    <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
</head>
<body>
    <header>
        <img src="assets/img/cabezera.png" class="imagen-cabezera" alt="">
    </header>
    
    <div class="contenedor-form">
        <div class="formulario-registro">
            <a href="../index.html" id="logo">  <img class="avatar" src="assets/img/logo.png" alt="logo" ></a>
            <br><br>
            <form action="registroCode.php" method="POST" role="form">
                <h3>Datos Personales</h3>
                <label for="Nombre">Nombre  :</label><input type="text" class="input_nombre" name="txtNombre" id="nombre" autofocus required placeholder="Ingresa tu nombre">
                <br>
                <label for="Apellido">Apellido  :</label><input type="text" name="txtApellido" id="apellido" required placeholder="Ingresa tu apellido">
                <br>
                <label for="Cedula">Cedula <i class="fas fa-id-card"></i> :</label><input type="number" name="txtCedula" id="cedula" required placeholder="Ingrese su cedula" >
                <br>
                <label for="Direccion">Direccion <i class="fas fa-home"></i> :</label><input type="text" name="txtDireccion" id="direccion" placeholder="Ingrese su direccion" >
                <br>
                <label for="Telefono">Telefono <i class="fas fa-phone"></i> :</label><input type="number" name="txtTelefono" id="telefono" placeholder="Ingrese su telefono" >
                <br>
                <label for="Celular">Celular <i class="fas fa-mobile-alt"></i> :</label><input type="number" name="txtCelular" id="celular" placeholder="Ingrese su celular" >
                <br><br>
                <hr class="borde">
                <h3 class="borde">Datos de Usuario</h3>
                <label for="Usuario">Usuario </label><i class="fas fa-user"></i>:<input type="text" name="txtUsuario" id="usuario" placeholder="Ingrese su Usuario" autocomplete="off">
                <br>
                <label for="Privilegio">Privilegio <i class="fas fa-passport"></i>:</label><select name="txtPrivilegio" id="privilegio" >
                    <option value="" hidden>Seleccione...</option>
                    <option value="1">Administrador</option>
                    <option value="2">Supervisor</option>
                    <option value="3">Analista</option>
                </select>
                <br>
                <label for="password">Contraseña <i class="fas fa-key"></i>:</label><input type="password" name="txtPassword" id="password" placeholder="Ingrese su Contraseña" autocomplete="off">
                <br>
                <label for="password2">Repita contraseña <i class="fas fa-key"></i>:</label><input type="password" id="password2" placeholder="Repita Contraseña" autocomplete="off"> 
                <br>
                
                <div class="formulario-botones">
                    <input type="submit" value="Registrarse" name="enviar">
                    <input type="reset" value="Limpiar">
                </div>
                <div class="links">
                    
                    <a href="login.php">¿Ya tienes una cuenta? Iniciar sesion </a>
                </div>
            </form>
        </div>
    </div>
    <div class="pie">
        <img src="assets/img/pie.png" class="imagen-pie" alt="">
    </div>
    <!-- CDN Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- /CDN Bootstrap -->
	<script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>