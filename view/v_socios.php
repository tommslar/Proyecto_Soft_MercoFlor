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
				
					<h3>Listado general de Socios</h3>
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
								<th>NRO Socio</th>
								<th>Operaciones</th>
							</tr>
						</thead>
						<tbody>
						
						{% for associate in associates %}
							<tr>
								<td>{{ associate.name }}</td>
								<td>{{ associate.last_name }}</td>
								<td>{{ associate.CUIT }}</td>
								<td>{{ associate.email }}</td>
								<td>{{ associate.address }}</td>
								<td>{{ associate.company }}</td>
								<td>{{ associate.membership_number }}</td>
								<td>
									<a href="./edit_associate.php?id={{ associate.id_actor }}"><img id="list-button" src="../view/images/edit.png" alt="Modificar"></a>
									<a href="./delete_associate.php?id={{ associate.id_actor }}"><img id="list-button" src="../view/images/delete.png" alt="Borrar"></a>
								</td>
							</tr>
						{% endfor %}
						
						</tbody>
					</table>

					<div class="clear">
						<br>
					</div>

					<a href="./new_associate.php"><img id="list-button" src="../view/images/add.png" alt="Agregar"></a>

				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include './components/footer.php' %}
			
		</div>
	</body>
</html>