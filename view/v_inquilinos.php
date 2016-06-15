<!doctype html>
<html>
	<head>
		{% include './components/head-content-backend.php' %}
	</head>
	<body>
		<div id="root-wrapper">
			
			{% include './components/alt-header.php' %}
			
			<div class="clear">
				<br>
			</div>
			
			<div id="content-wrapper">
				
				{% include './components/menu-decision.php' %}
				
				<div class="clear">
					<br>
				</div>
				
				<div id="main-content">
				
					<h3>Listado general de Inquilinos</h3>
					<hr>
					<table>
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>CUIT</th>
								<th>EMail</th>
								<th>Dirección</th>
								<th>Razón Social</th>
								<th>Fecha Desde</th>
								<th>Fecha Hasta</th>
								<th>Operaciones</th>
							</tr>
						</thead>
						<tbody>
						
						{% for renter in renters %}
							<tr>
								<td>{{ renter.name }}</td>
								<td>{{ renter.last_name }}</td>
								<td>{{ renter.CUIT }}</td>
								<td>{{ renter.email }}</td>
								<td>{{ renter.address }}</td>
								<td>{{ renter.company }}</td>
								<td>{{ renter.date_from }}</td>
								<td>{{ renter.date_to }}</td>
								<td>
									<a href="./edit_renter.php?id={{ renter.id_actor }}"><img id="list-button" src="../view/images/edit.png" alt="Modificar"></a>
									<a href="./delete_renter.php?id={{ renter.id_actor }}"><img id="list-button" src="../view/images/delete.png" alt="Borrar"></a>
								</td>
							</tr>
						{% endfor %}
						
						</tbody>
					</table>

					<div class="clear">
						<br>
					</div>

					<a href="./new_renter.php"><img id="list-button" src="../view/images/add.png" alt="Agregar"></a>
					
				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include './components/footer.php' %}
			
		</div>
	</body>
</html>