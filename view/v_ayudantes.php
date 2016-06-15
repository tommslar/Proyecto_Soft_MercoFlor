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
				
					<h3>Listado general de Ayudantes</h3>
					<hr>
					<table>
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>DNI</th>
								<th>CUIT Empleador</th>
								<th>Operaciones</th>
							</tr>
						</thead>
						<tbody>
						
						{% for assistant in assistants %}
							<tr>
								<td>{{ assistant.name }}</td>
								<td>{{ assistant.last_name }}</td>
								<td>{{ assistant.DNI }}</td>
								<td>{{ assistant.dni_participant }}</td>
								<td>
									<a href="./edit_assistant.php?id={{ assistant.id_assistant }}"><img id="list-button" src="../view/images/edit.png" alt="Modificar"></a>
									<a href="./delete_assistant.php?id={{ assistant.id_assistant }}"><img id="list-button" src="../view/images/delete.png" alt="Borrar"></a>
								</td>
							</tr>
						{% endfor %}
						
						</tbody>
					</table>

					<div class="clear">
						<br>
					</div>

					<a href="./new_assistant.php"><img id="list-button" src="../view/images/add.png" alt="Agregar"></a>
					
				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include './components/footer.php' %}
			
		</div>
	</body>
</html>