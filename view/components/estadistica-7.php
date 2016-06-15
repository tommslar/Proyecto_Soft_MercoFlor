<p>Generar gráfico de las cinco especies más vendidas históricamente dado un determinado mes</p>
<form name="estadistica" method="post" action="./estadistica_7.php" onsubmit="return validarsiete()" >
	Mes: 
	<select id= "op" name="mes">
		<option value="01">Enero</option>
		<option value="02">Febrero</option>
		<option value="03">Marzo</option>
		<option value="04">Abril</option>
		<option value="05">Mayo</option>
		<option value="06">Junio</option>
		<option value="07">Julio</option>
		<option value="08">Agosto</option>
		<option value="09">Septiembre</option>
		<option value="10">Octubre</option>
		<option value="11">Noviembre</option>
		<option value="12">Diciembre</option>
	</select>
	<br><br>
	<input type="submit" value="Generar">
</form>