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
				
					<h3>Listado general de Especies</h3>
					<hr>
					<table>
						<thead>
							<tr>
								<th>Nombre Vulgar</th>
								<th>Nombre Científico</th>
								<th>Hábitat</th>
								<th>Región</th>
								<th>Época</th>
								<th>Tipo</th>
								<th>Operaciones</th>
							</tr>
						</thead>
						<tbody>
						
						{% for specie in species %}
							<tr>
								<td>{{ specie.vulgar_name }}</td>
								<td>{{ specie.scientific_name }}</td>
								<td>{{ specie.hname }}</td>
								<td>{{ specie.rname }}</td>
								<td>{{ specie.bsname }}</td>
								<td>{{ specie.name }}</td>
								<td>
									<a href="./edit_specie.php?id={{ specie.id_specie }}"><img id="list-button" src="../view/images/edit.png" alt="Modificar"></a>
									<a href="./delete_specie.php?id={{ specie.id_specie }}"><img id="list-button" src="../view/images/delete.png" alt="Borrar"></a>
								</td>
							</tr>
						{% endfor %}
						
						</tbody>
					</table>

					<div class="clear">
						<br>
					</div>

					<a href="./new_specie.php"><img id="list-button" src="../view/images/add.png" alt="Agregar"></a>
					
				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include './components/footer.php' %}
			
		</div>
	</body>
</html>