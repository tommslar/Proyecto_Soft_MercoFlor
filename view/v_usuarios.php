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
				
					<h3>Listado general de Usuarios</h3>
					<hr>
					<table>
						<thead>
							<tr>
								<th>Nombre de Usuario</th>
								<th>Contraseña</th>
								<th>EMail</th>
								<th>Rol</th>
								<th>CUIT Cliente/Socio/Inquilino</th>
								<th>Operaciones</th>
							</tr>
						</thead>
						<tbody>
						
						{% for user in users %}
							<tr>
								<td>{{ user.username }}</td>
								<td>{{ user.password }}</td>
								<td>{{ user.email }}</td>
								<td>{{ user.description }}</td>
								<td>{{ user.CUIT }}</td>
								<td>
									<a href="./edit_user.php?id={{ user.id_user }}"><img id="list-button" src="../view/images/edit.png" alt="Modificar"></a>
									<a href="./delete_user.php?id={{ user.id_user }}"><img id="list-button" src="../view/images/delete.png" alt="Borrar"></a>
								</td>
							</tr>
						{% endfor %}
						
						</tbody>
					</table>

					<div class="clear">
						<br>
					</div>

					<a href="./new_user.php"><img id="list-button" src="../view/images/add.png" alt="Agregar"></a>
					
				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include './components/footer.php' %}
			
		</div>
	</body>
</html>	