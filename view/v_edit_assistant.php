<!doctype html>
<html>
	<head>
		{% include ('./components/head-content-backend.php') %}
				<script type="text/javascript" src="../view/js/validar_ayudante.js"></script>

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

					<h3>Editar Ayudante</h3>

					<div class="clear">
						<hr>
					</div>
				
					<form name= "formayu" id="formulario" action="./apply_edit_assistant.php" method="post" onsubmit="return validar()">
						<input type="hidden" name="id_assistant" id="id_assistant" value="{{ id }}"/>
						Nombre: <input type="text" id="nombre" name="nombre" size="25" maxlength="50" value="{{ rows.name }}" />
						<br><br>
						Apellidos: <input type="text" id="apellidos" name="apellidos" size="35" maxlength="50" value="{{ rows.last_name }}"/>
						<br><br>
						DNI: <input type="text" id="dni" name="dni" size="8" maxlength="8" value="{{ rows.DNI }}" />
						<input type="hidden" id="dni-viejo" name="dni-viejo" size="8" maxlength="8" value="{{ rows.DNI }}" />
						<br><br>
						CUIT del patron/jefe: <input type="text" id="dni_jefe" name="dni_jefe" size="11" maxlength="11" value="{{ rows.dni_participant }}"/>
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