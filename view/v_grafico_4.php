<!doctype html>
<html>
	<head>
		{% include './components/head-content-backend.php' %}
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
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
					<hr>
					
					<div id="container"></div>
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

{% set titulo = "'Especie más y menos vendida por mes en " ~ year ~ "'" %}

<script>
	$(function () { 
		$('#container').highcharts({
			chart: {
				type: 'bar'
			},
			title: {
				text: {{ titulo|raw }}
			},
			xAxis: {
				categories: {{ cat|raw }}
			},
			yAxis: {
				title: {
					text: 'Valores'
				}
			},
			series: [{
				name: 'Más vendidas',
				data: {{ mas|raw }}
			}, {
				name: 'Menos vendidas',
				data: {{ menos|raw }}
			}]
		});
	});
</script>