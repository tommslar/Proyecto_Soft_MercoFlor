<!doctype html>
<html>
	<head>
		{% include './components/head-content-backend.php' %}
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="../view/js/google_maps.js"></script>
	</head>
	<body onload="initializeWithMarkers()">
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
					<hr>
					
					<div id="map-canvas">
						
					</div>
					
					<br><br>
					
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

<script>
	var locations_menos = [{{ direcciones_menos|raw }}];
	var locations_mas = [{{ direcciones_mas|raw }}];
</script>