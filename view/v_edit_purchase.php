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

					<h3>Editar Ingreso</h3>

					<div class="clear">
						<hr>
					</div>
				
					<form name= "formtran" id="formulario" action="./apply_edit_purchase.php" method="post" onsubmit="return validar()">
						Fecha (AAAA-MM-DD): <input type="text" id="fecha" name="fecha" size="10" maxlength="10" value="{{ rows.date }}">
						<br><br>
						<input type="hidden" name="id_transaction" id="id_transaction" value="{{ rows.id_transaction }}" />
						CUIT:<input type="text" name="cuit-vista" id="cuit-vista" size="11" maxlength="11" 
						{% if user_role.id_role == 3 %}
							{% set a = "value=" ~ data_socinq.CUIT ~ " disabled" %}
							{{ a }}
						{% else %}
							{% set a = "value=" ~ rows.CUIT ~ " disabled" %}
							{{ a }}
						{% endif %}
						/>
						<input type="hidden" name="cuit" id="cuit" 
						{% if user_role.id_role == 3 %}
							{% set b = "value=" ~ data_socinq.CUIT %}
							{{ b }}
						{% else %}
							{% set b = "value=" ~ rows.CUIT %}
							{{ b }}
						{% endif %}
						/>
						<br><br> 
						Color: <select id="op" name="color">
							<option></option>
							{% for option in colors %}
								<option value="{{ option.id_color }}" 
								{% if option.id_color == rows.color %}
									{{ "selected" }}
								{% endif %}
								>{{ option.name }}</option>
							{% endfor %}
						</select>
						<br><br>
						Cantidad: <input type="text" name="cantidad" id="cantidad" size="10" maxlength="10" value="{{ rows.cant }}" />
						<br><br>
						<input type="hidden" name="cantidad-vieja" size="10" maxlength="10" value="{{ rows.cant }}" />
						Precio:<input type="text" name="precio" id="precio" size="10" maxlength="10" value="{{ rows.price }}" />
						<br><br>
						Especie: <select id="op" name="especies-vista" disabled>
							<option></option>
							{% for option in species %}
								<option value="{{ option.id_specie }}" 
								{% if option.id_specie == rows.id_specie %}
									{{ "selected" }}
								{% endif %}
								>{{ option.scientific_name }}</option>
							{% endfor %}
						</select>
						<input type="hidden" name="especies" id="especies" value="{{ rows.id_specie }}" />
						<br><br>
						<input type="submit" value="Modificar">
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