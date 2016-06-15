<!doctype html>
<html>
	<head>
		{% include './components/head-content-login.php' %}
		<script type="text/javascript" src="../view/js/validar_login.js"></script>
	</head>
	<body>
		<div id="root-wrapper">
			
			{% include './components/alt-header.php' %}
			
			<div class="clear">
				<br>
			</div>
			
			<div id="content-wrapper">
				
				{% include './components/login-menu.php' %}
				
				<div class="clear">
					<br>
				</div>
				<div id="main-content">
					
					{% include './components/form-login.php' %}
					
				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include './components/footer.php' %}

		</div>
	</body>
</html>