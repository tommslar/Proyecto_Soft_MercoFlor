<!doctype html>
<html>
	<head>
		{% include "./components/head-content-backend.php" %}
	</head>
	<body>
		<div id="root-wrapper">
			
			{% include "./components/alt-header.php" %}
			
			<div class="clear">
				<br>
			</div>
			
			<div id="content-wrapper">
				
				{% include './components/menu-decision.php' %}
				
				<div class="clear">
					<br>
				</div>
				
				<div id="main-content">
				
					<h3>Listado general de Clientes</h3>
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
								<th>Condición Impositiva</th>
								<th>Operaciones</th>
							</tr>
						</thead>
						<tbody>
						
						{% for client in clients %}
							<tr>
								<td>{{ client.name }}</td>
								<td>{{ client.last_name }}</td>
								<td>{{ client.CUIT }}</td>
								<td>{{ client.email }}</td>
								<td>{{ client.address }}</td>
								<td>{{ client.company }}</td>
								<td>{{ client.AFIP }}</td>
								<td>
									<a href="./edit_client.php?id={{ client.id_actor }}"><img id="list-button" src="../view/images/edit.png" alt="Modificar"></a>
									<a href="./delete_client.php?id={{ client.id_actor }}"><img id="list-button" src="../view/images/delete.png" alt="Borrar"></a>
								</td>
							</tr>
						{% endfor %}
						
						</tbody>
					</table>
					
					<div class="clear">
						<br>
					</div>

					<a href="./new_client.php"><img id="list-button" src="../view/images/add.png" alt="Agregar"></a>
					
				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include "./components/footer.php" %}
			
		</div>
	</body>
</html>