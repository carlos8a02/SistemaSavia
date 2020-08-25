<table class="table table-hover table-inverse table-responsive">
						<legend>Distribucion Geografica</legend>
							<thead>
								<tr>
									<th>ID</th>
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
									<?php foreach($filas as $datos){

									

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