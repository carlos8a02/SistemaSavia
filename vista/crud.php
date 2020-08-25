<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>

<?php

include "../controlador/DatosControlador.php"; 
include "../controlador/DatosControlador2.php"; 

$filas2=DatosControlador::getDatos();
$filas3=DatosControlador2::getDatos2();

?>
<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
					<table class="table table-hover table-inverse table-responsive">
						<legend>Distribucion Geografica</legend>
							<thead>
								<tr>
									<0th>ID</th>
									<th>Estado</th>
									<th>Municipios</th>
									<th>Parroquias</th>
									<th>Sector</th>
									<th>Nombre de comunidad</th>
									<th>Nombre Indigena</th>
									<th>Grupo</th>
									<th>Acción</th>
								</tr>
								</thead>
								<tbody>
									<?php foreach($filas2 as $datos){

									

									?>
									<tr>
										<td><?php echo $datos["id"] ?></td>
										<td><?php echo $datos["estado"] ?></td>
										<td><?php echo $datos["municipios"] ?></td>
										<td><?php echo $datos["parroquias"] ?></td>
										<td><?php echo $datos["sector"] ?></td>
										<td><?php echo $datos["nombre_comunidad"] ?></td>
										<td><?php echo $datos["nombre_indigena"] ?></td>
										<td><?php echo $datos["grupo"] ?></td>
										
										<td>
											<a href="#" class="btn btn-success btn-sm">Editar</a>
											<a href="#" class="btn btn-danger  btn-sm">Eliminar</a>
										</td>	
									</tr>
									<?php } ?>
								</tbody>
						</table>
						<br>
						<table class="table table-hover table-inverse table-responsive">
						<legend>Distribucion Geografica</legend>
							<thead>
								<tr>
									<0th>ID</th>
									<th>Estado</th>
									<th>Municipios</th>
									<th>Parroquias</th>
									<th>Sector</th>
									<th>Nombre de comunidad</th>
									<th>Nombre Indigena</th>
									<th>Grupo</th>
									<th>Acción</th>
								</tr>
								</thead>
								<tbody>
									<?php foreach($filas3 as $datos2){

									

									?>
									<tr>
										<td><?php echo $datos2["id"] ?></td>
										<td><?php echo $datos2["base_misiones"] ?></td>
										<td><?php echo $datos2["inf1"] ?></td>
										<td><?php echo $datos2["consejo_comunal"] ?></td>
										<td><?php echo $datos2["inf2"] ?></td>
										<td><?php echo $datos2["tipo_de_consejo_comunal"] ?></td>
										<td><?php echo $datos2["pertenece_a_una_comunidad"] ?></td>
										<td><?php echo $datos2["comite_indigena"] ?></td>
										
										
										<td>
											<a href="#" class="btn btn-success btn-sm">Editar</a>
											<a href="#" class="btn btn-danger  btn-sm">Eliminar</a>
										</td>	
									</tr>
									<?php } ?>
								</tbody>
						</table>
					
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /.container -->

<?php include 'partials/footer.php';?>