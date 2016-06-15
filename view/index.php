<!doctype html>
<html>
	<head>
		{% include './components/head-content-index.php' %}
	</head>
	<body>
		
		<div id="root-wrapper">
		
			{% include './components/header.php' %}
			
			<div class="clear">
				<br>
			</div>
			
			<div id="content-wrapper">
			
				{% include './components/menu.php' %}
				
				<div class="clear">
					<br>
				</div>
				
				<div id="main-content">
				
					<h3>Listado general de Stock</h3>
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
								<th>Stock</th>
							</tr>
						</thead>
						<tbody>
						
						{% for item in index_stock %}
							<tr>
								<td>{{ item.vulgar_name }}</td>
								<td>{{ item.scientific_name }}</td>
								<td>{{ item.hname }}</td>
								<td>{{ item.rname}}</td>
								<td>{{ item.bsname }}</td>
								<td>{{ item.name }}</td>
								<td>{{ item.quantity }}</td>
							</tr>
						{% endfor %}
						
						</tbody>
					</table>
				
				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include './components/footer.php' %}
			
		</div>
	</body>
</html>