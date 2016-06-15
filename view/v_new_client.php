<!doctype html>
<html>
	<head>
		{% include ('./components/head-content-backend.php') %}
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="../view/js/google_maps.js"></script>
		<script type="text/javascript" src="../view/js/validar_cliente.js"></script>
	</head>
	<body onload="initialize()">
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

					<h3>Nuevo Cliente</h3>

					<div class="clear">
						<hr>
					</div>
				
					<form name="formcli" id="formulario" action="./apply_new_client.php" method="post" onsubmit="return validar()">
						Nombre: <input type="text" id="nombre" name="nombre" size="25" maxlength="50">
						<br><br>
						Apellidos: <input type="text" id="apellidos" name="apellidos" size="35" maxlength="50">
						<br><br>
						CUIT(sin guiones): <input type="text" id="cuit" name="cuit" size="20" maxlength="50">
						<br><br>
						E-mail: <input type="email" id="mail" name="mail" size="15" maxlength="50">
						<br><br>
						Dirección: <input type="text" id="direccion" name="direccion" size="25" maxlength="50" onblur="codeAddress()">
						<br><br>
						Razón Social: <input type="text" id="razon" name="razon" size="15" maxlength="50">
						<br><br>
						Condicion impositiva: <select id="op" name="cond-imp" >
							<option></option>
							{% for option in cond_imps %}
								<option value="{{ option.id_cond }}" >{{ option.name }}</option>
							{% endfor %}
						</select>
						<br><br>
						<div id="map-canvas"></div>
						<br><br>
						<input type="submit" value="Agregar">
						<input type="reset" value="Limpiar campos">
					</form>
					
				</div>
			</div>
			
			<div id="push" class="clear">
				<hr>
			</div>
			
			{% include './components/footer.php' %}
			
		</div>
	</body>
</html>