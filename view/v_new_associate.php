<!doctype html>
<html>
	<head>
		{% include ('./components/head-content-backend.php') %}
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="../view/js/google_maps.js"></script>
		<script type="text/javascript" src="../view/js/validar_socio.js"></script>  

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
				</div>
				
				<div id="main-content">

					<h3>Nuevo Socio</h3>

					<div class="clear">
						<hr>
					</div>
				
					<form name= "formsoc" id="formulario" action="./apply_new_associate.php" method="post" onsubmit="return validar()" >
						Nombre: <input type="text" name="nombre" id="nombre" size="25" maxlength="50"/>
						<br><br>
						Apellidos: <input type="text" name="apellidos" id="apellidos" size="35" maxlength="50"/>
						<br><br>
						CUIT (sin guiones): <input type="text" name="cuit" id="cuit" size="20" maxlength="50"/>
						<br><br>
						E-mail: <input type="email" name="mail" id="mail" size="15" maxlength="50"/>
						<br><br>
						Dirección: <input type="text" name="direccion" id="direccion" size="25" maxlength="50" onblur="codeAddress()" />
						<br><br>
						Número de socio: <input type="text" name="numsocio" id="numsocio" size="15" maxlength="15"/>
						<br><br>
						Razón Social: <input type="text" id="razon" name="razon" size="15" maxlength="50" />
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