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

					<h3>Nuevo Usuario</h3>

					<div class="clear">
						<hr>
					</div>
				
					<form name= "formuser" id="formulario" action="./apply_new_user.php" method="post" onsubmit="return validar()">
						Username:<input type="text" id= "username" name="username">
						<br><br>
						Password:<input type="password" id="password" name="password">
						<br><br>
						Email:<input type="email" id="email" name="email">
						<br><br>
						Rol:<select id="roles" name="roles">
							<option></option>
							<option value="1">Administrador</option>
							<option value="2">Personal</option>
							<option value="3">Socio/Inquilino</option>
							<option value="4">Cliente</option>
						</select>
						<br><br>
						CUIT (cliente, socio o inquilino):<input type="text" id="cuit-csi" name="cuit-csi" size="11" maxlength="11" />
						<a href="./socios.php" target="_blank">Ir a listado de socios</a>/<a href="./inquilinos.php" target="_blank">Ir a listado de inquilinos</a>/<a href="./clientes.php" target="_blank">Ir a listado de clientes</a>
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