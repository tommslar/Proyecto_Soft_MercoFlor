<!doctype html>
<html>
	<head>
		{% include ('./components/head-content-backend.php') %}
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="../view/js/google_maps.js"></script>
				<script type="text/javascript" src="../view/js/validar_socio.js"></script>

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

					<h3>Editar Socio</h3>

					<div class="clear">
						<hr>
					</div>
				
					<form name= "formsoc" id="formulario" action="./apply_edit_associate.php" method="post" onsubmit="return validar()">
						<input type="hidden" name="id_actor" id="id_actor" value="{{ id }}"/>
						Nombre: <input type="text" name="nombre" id="nombre" size="25" maxlength="50" value="{{ rows.name }}" />
						<br><br>
						Apellidos: <input type="text" name="apellidos" id="apellidos" size="35" maxlength="50" value="{{ rows.last_name }}" />
						<br><br>
						CUIT: <input type="text" name="cuit" id="cuit" size="20" maxlength="50" value="{{ rows.CUIT }}" />
						<input type="hidden" name="cuit-viejo" id="cuit-viejo" size="20" maxlength="50" value="{{ rows.CUIT }}" />
						<br><br>
						E-mail: <input type="text" name="mail" id="mail" size="15" maxlength="50" value="{{ rows.email }}" />
						<br><br>
						Dirección: <input type="text" name="direccion" id="direccion" size="25" maxlength="50" value="{{ rows.address }}" />
						<br><br>
						Número de socio: <input type="text" name="numsocio" id="numsocio" size="15" maxlength="15" value="{{ rows.membership_number }}" />
						<input type="hidden" name="numsocio-viejo" id="numsocio-viejo" size="15" maxlength="15" value="{{ rows.membership_number }}" />
						<br><br>
						Razón Social: <input type="text" id="razon" name="razon" size="15" maxlength="50" value="{{ rows.company }}"/>
						<br><br>
						<input type="submit" value="Modificar">
						<input type="reset" value="Restablecer">
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