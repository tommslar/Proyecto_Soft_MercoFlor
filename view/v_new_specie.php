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

					<h3>Nueva Especie</h3>

					<div class="clear">
						<hr>
					</div>
				
					<form name= "formesp" id="formulario" action="./apply_new_specie.php" method="post" onsubmit="return validar()" >
						Nombre vulgar: <input type="text" name="vulgar" id="vulgar" size="25" maxlength="50">
						<br><br>
						Nombre científico: <input type="text" name="cientifico" id="cientifico" size="35" maxlength="50">
						<br><br>
						Hábitat:<select id="oph" name="habitat" >
							<option></option>
							{% for option in habitats %}
								<option value="{{ option.id_habitat }}" >{{ option.name }}</option>
							{% endfor %}
						</select>
						<br><br>
						Región: <select id="opr" name="region" >
							<option></option>
							{% for option in regions %}
								<option value="{{ option.id_region }}" >{{ option.name }}</option>
							{% endfor %}
						</select>
						<br><br>
						Época del año que florece: <select id="opep" name="epoca" >
							<option></option>
							{% for option in blossom_seasons %}
								<option value="{{ option.id_blossom_season }}" >{{ option.name }}</option>
							{% endfor %}
						</select>
						<br><br>
						Especie (tipo): <select id="opes" name="especies" >
							<option></option>
							{% for option in specie_types %}
								<option value="{{ option.id_specie_type }}" >{{ option.name }}</option>
							{% endfor %}
						</select>
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