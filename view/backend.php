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
				</div>
				
				<div id="main-content">
				
					<h2>Bienvenido {{ persona }} a Cooperativa MercoFlor S.R.L.: Sección de Administración. Haga click en alguna de las opciones del menú superior para continuar.</h2>
					
				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include './components/footer.php' %}
			
		</div>
	</body>
</html>