<?php include 'partials/head.php';?>
<?php
//1 admin 2 analista 3 supervisor 
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) :
        header("location:index.php");
	elseif($_SESSION["usuario"]["privilegio"] == 3) :
		header("location:encuestas/vista_1.php");
	endif;
} else {
    header("location:login.php");
}
?>
<?php include 'partials/menu.php';?>
<div class="container">
	<div class="starter-template">
		<br>	
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
				<p>Panel de control | <span class="label label-info"><?php 
				if($_SESSION["usuario"]["privilegio"] == 1):
					echo "Admin";
					elseif($_SESSION["usuario"]["privilegio"] == 2):
						echo "Supervisor";
					else:
						echo "Analista";
					endif; ?></span></p>
				<p>
		
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
				</p>
			</div>
		</div>
		
	</div>
</div><!-- /.container -->

<?php include 'partials/footer.php';?>