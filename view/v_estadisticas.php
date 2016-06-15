<!doctype html>
<html>
	<head>
		{% include './components/head-content-backend.php' %}
						<script type="text/javascript" src="../view/js/validar_estadistica_3.js"></script>
						<script type="text/javascript" src="../view/js/validar_estadistica_4.js"></script>
						<script type="text/javascript" src="../view/js/validar_estadistica_5.js"></script>
						<script type="text/javascript" src="../view/js/validar_estadistica_7.js"></script>
						<script type="text/javascript" src="../view/js/validar_estadistica_2.js"></script>
						<script type="text/javascript" src="../view/js/validar_estadistica_6.js"></script>
										
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
				
					<h3>Estadísticas</h3>
					<hr>
				
					{% if (user_role.id_role <= 2) %}
						{% include './components/estadistica-1.php' %}
						{% include './components/estadistica-2.php' %}
						{% include './components/estadistica-3.php' %}
						{% include './components/estadistica-4.php' %}
						{% include './components/estadistica-5.php' %}
						{% include './components/estadistica-6.php' %}
					{% endif %}
					
					{% if (user_role.id_role == 1 or user_role.id_role == 3) %}
						{% include './components/estadistica-7.php' %}
					{% endif %}					
					
				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include './components/footer.php' %}
			
		</div>
	</body>
</html>