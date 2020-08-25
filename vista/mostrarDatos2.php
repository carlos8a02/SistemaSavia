<?php

include "../controlador/DatosControlador2.php";

$filas2=DatosControlador2::getDatos2();

?>

<table class="table table-hover table-inverse table-responsive">
						<legend>Comunas</legend>
							<thead>
								<tr>
									<th>ID</th>
									<th>Base de misiones</th>
									<th>Nombre de base Mision</th>
									<th>Consejo Comunal</th>
									<th>Nombre Consejo Comunal</th>
									<th>tipo de consejo comunal</th>
									<th>El consejo pertenece a una comunidad</th>
									<th>Comite indigena</th>
									<th>Acción</th>
								</tr>
								</thead>
								<tbody>
									<?php foreach($filas2 as $datos2){
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
						<br>
						

<?php include 'partials/footer.php';?>