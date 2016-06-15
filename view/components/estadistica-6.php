<p>Generar gráfico de clientes y sus compras ordenado por los que más compraron para una especie</p>
<form name="estadistica" method="post" action="./estadistica_6.php" onsubmit="return validarseis()" >
	<select id="op" name="especies">
		<option></option>
		{% for option in species %}
			<option value="{{ option.id_specie }}">{{ option.scientific_name }}</option>
		{% endfor %}
	</select>
	<br><br>
	<input type="submit" value="Generar">
</form>
<hr>