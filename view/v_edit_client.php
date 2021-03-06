<!doctype html>
<html>
	<head>
		{% include ('./components/head-content-backend.php') %}
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="../view/js/google_maps.js"></script>
				<script type="text/javascript" src="../view/js/validar_cliente.js"></script>

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

					<h3>Editar Cliente</h3>

					<div class="clear">
						<hr>
					</div>
				
					<form name= "formcli" id="formulario" action="./apply_edit_client.php" method="post" onsubmit="return validar()">
						<input type="hidden" name="id_actor" id="id_actor" value="{{ id }}"/>
						Nombre: <input type="text" id="nombre" name="nombre" size="25" maxlength="50" value="{{ rows.name }}" />
						<br><br>
						Apellidos: <input type="text" id="apellidos" name="apellidos" size="35" maxlength="50" value="{{ rows.last_name }}" />
						<br><br>
						CUIT: <input type="text" id="cuit" name="cuit" size="20" maxlength="50" value="{{ rows.CUIT }}" />
						<br><br>
						E-mail: <input type="text" id="mail" name="mail" size="15" maxlength="50" value="{{ rows.email }}" />
						<br><br>
						Dirección: <input type="text" id="direccion" name="direccion" size="25" maxlength="50" value="{{ rows.address }}" />
						<br><br>
						Razón Social: <input type="text" id="razon" name="razon" size="15" maxlength="50" value="{{ rows.company }}" />
						<br><br>
						Condicion impositiva: <select id="op" name="cond-imp">
							<option></option>
							{% for option in cond_imps %}
								<option value="{{option.id_cond}}" {%  if option.id_cond == rows.id_cond %} {{ "selected" }} {% endif %} > {{option.name}} </option>
							 {% endfor %}
						</select>
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