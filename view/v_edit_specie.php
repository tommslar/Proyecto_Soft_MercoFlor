<!doctype html>
<html>
	<head>
		{% include ('./components/head-content-backend.php') %}
				<script type="text/javascript" src="../view/js/validar_especie.js"></script>

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

					<h3>Editar Especie</h3>

					<div class="clear">
						<hr>
					</div>
				
					<form name= "formesp" id="formulario" action="./apply_edit_specie.php" method="post" onsubmit="return validar()">
						<input type="hidden" name="id_specie" id="id_specie" value="{{ rows.id_specie }}" />
						Nombre vulgar: <input type="text" name="vulgar" id="vulgar" size="25" maxlength="50" value="{{ rows.vulgar_name }}" />
						<br><br>
						Nombre científico: <input type="text" name="cientifico" id="cientifico" size="35" maxlength="50" value="{{ rows.scientific_name }}" />
						<br><br>
						Hábitat:<select id="op" name="habitat">
							<option></option>
							{% for option in habitats %}
								<option value="{{option.id_habitat}}" {%  if option.id_habitat == rows.id_habitat %} {{ "selected" }} {% endif %} > {{option.name}} </option>
							 {% endfor %}
						</select>
						<br><br>
						Región: <select id="op" name="region">
							<option></option>
							{% for option in regions %}
								<option value="{{option.id_region}}" {%  if option.id_region == rows.id_region %} {{ "selected" }} {% endif %} > {{option.name}} </option>
							 {% endfor %}
						</select>
						<br><br>
						Época del año que florece: <select id="op" name="epoca">
							<option></option>
							{% for option in blossom_seasons %}
								<option value="{{option.id_blossom_season}}" {%  if option.id_blossom_season == rows.id_blossom_season %} {{ "selected" }} {% endif %} > {{option.name}} </option>
							 {% endfor %}
						</select>
						<br><br>
						Especie (tipo): <select id="op" name="especies">
							<option></option>
							{% for option in specie_types %}
								<option value="{{option.id_specie_type}}" {%  if option.id_specie_type == rows.id_specie_type %} {{ "selected" }} {% endif %} > {{option.name}} </option>
							 {% endfor %}
						</select>
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