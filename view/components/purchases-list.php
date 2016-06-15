<h3>Listado general de Ingresos</h3>
<hr>
<table>
	<thead>
		<tr>
			<th>CUIT Socio/Inquilino</th>
			<th>Fecha</th>
			<th>Hora</th>
			<th>Especie</th>
			<th>Color</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Operaciones</th>
		</tr>
	</thead>
	<tbody>
		{% for purchase in purchases %}
			<tr>
				<td>{{ purchase.CUIT }}</td>
				<td>{{ purchase.date }}</td>
				<td>{{ purchase.time }}</td>
				<td>{{ purchase.scientific_name }}</td>
				<td>{{ purchase.cname }}</td>
				<td>{{ purchase.cant }}</td>
				<td>{{ purchase.price }}</td>
				<td>
					<a href="./edit_purchase.php?id={{ purchase.id_transaction }}"><img id="list-button" src="../view/images/edit.png" alt="Modificar"></a>
					<a href="./delete_transaction.php?id={{ purchase.id_transaction }}&tipo=1"><img id="list-button" src="../view/images/delete.png" alt="Borrar"></a>
				</td>
			</tr>
		{% endfor %}
	</tbody>
</table>

<div class="clear">
	<br>
</div>

<a href="./new_purchase.php"><img id="list-button" src="../view/images/add.png" alt="Agregar"></a>

<div class="clear">
	<br>
</div>