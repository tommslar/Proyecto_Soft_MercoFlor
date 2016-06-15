<!doctype html>
<html>
	<head>
		{% include './components/head-content-backend.php' %}
		<script type="text/javascript" src="../view/js/validar_transaccion.js"></script>  
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

					<h3>Nueva Venta</h3>

					<div class="clear">
						<hr>
					</div>
				
					<form name= "formtran" id="formulario" action="./apply_new_sale.php" method="post" onsubmit="return validar()" >
						Fecha (AAAA-MM-DD): <input type="text" id="fecha" name="fecha" size="10" maxlength="10">
						<br><br>
						CUIT:<input type="text" name="cuit" id="cuit" size="11" maxlength="11" 
						{% if user_role.id_role == 3 %}
							{% set a = "value=" ~ data_socinq.CUIT ~ " disabled" %}
							{{ a }}
						{% endif %}
						/>
						<a href="./socios.php" target="_blank">Ir a listado de socios</a>/<a href="./inquilinos.php" target="_blank">Ir a listado de inquilinos</a>
						<br><br> 
						Color: <select id="op" name="color">
							<option></option>
							{% for option in colors %}
								<option value="{{ option.id_color }}">{{ option.name }}</option>
							{% endfor %}
						</select>
						<br><br>
						Cantidad: <input type="text" name="cantidad" id="cantidad" size="10" maxlength="10">
						<br><br>
						Precio:<input type="text" id="precio" name="precio" size="10" maxlength="10">
						<br><br>
						Especie: <select id="op" name="especies">
							<option></option>
							{% for option in species %}
								<option value="{{ option.id_specie }}">{{ option.scientific_name }}</option>
							{% endfor %}
						</select>
						<br><br>
						CUIT (cliente):<input type="text" name="cuit-cli" id="cuit-cli" size="11" maxlength="11">
						<a href="./clientes.php" target="_blank">Ir a listado de clientes</a>
						<br><br>
						<input type="submit" value="Agregar">
						<input type="Reset" value="Limpiar campos">
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