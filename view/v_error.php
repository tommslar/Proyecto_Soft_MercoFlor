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
				
					<h2>Ha ocurrido un error, revise los datos y vuelva a intentarlo.</h2>
					
					<input type="button" value="Volver" onclick="window.history.back()">
					
				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include './components/footer.php' %}
			
		</div>
	</body>
</html>