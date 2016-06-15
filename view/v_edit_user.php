<!doctype html>
<html>
	<head>
		{% include ('./components/head-content-backend.php') %}
		<script type="text/javascript" src="../view/js/validar_usuario.js"></script>

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

					<h3>Editar Usuario</h3>

					<div class="clear">
						<hr>
					</div>
				
					<form name= "formuser" id="formulario" action="./apply_edit_user.php" method="post" onsubmit="return validar()">
						<input type="hidden" name="id_user" value="{{ id }}" />
						Username:<input type="text" name="username" id="username" value="{{ rows.username }}" />
						<br><br>
						Password:<input type="password" name="password" id="password" value="{{ rows.password }}" />
						<br><br>
						Email:<input type="email" name="email" id="email" value="{{ rows.email }}" />
						<br><br>
						Rol:<select id="roles" name="roles">
							<option></option>
							<option value="1" {% if rows.id_role == 1 %} {{ 'selected' }} {% endif %}>Administrador</option>
							<option value="2" {% if rows.id_role == 2 %} {{ 'selected' }} {% endif %}>Personal</option>
							<option value="3" {% if rows.id_role == 3 %} {{ 'selected' }} {% endif %}>Socio/Inquilino</option>
							<option value="3" {% if rows.id_role == 4 %} {{ 'selected' }} {% endif %}>Cliente</option>
						</select>
						<br><br>
						CUIT (cliente, socio o inquilino):<input type="text" id="cuit-csi" name="cuit-csi" size="11" maxlength="11" value="{{ rows.CCUIT }}" />
						<br><br>
						<input type="submit" value="Modificar">
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