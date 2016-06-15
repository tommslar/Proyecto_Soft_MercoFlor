<h3>Listado general de Ventas</h3>
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
			<th>Cliente</th>
			<th>Operaciones</th>
		</tr>
	</thead>
	<tbody>
		{% for sale in sales %}
			<tr>
				<td>{{ sale.CUIT }}</td>
				<td>{{ sale.date }}</td>
				<td>{{ sale.time }}</td>
				<td>{{ sale.scientific_name }}</td>
				<td>{{ sale.cname }}</td>
				<td>{{ sale.cant }}</td>
				<td>{{ sale.price }}</td>
				<td>{{ sale.CCUIT }}</td>
				<td>
				{% if user_role.id_role != 4 %}
					{% include './components/sale-operations.php' %}
				{% endif %}
				</td>
			</tr>
		{% endfor %}
	</tbody>
</table>

<div class="clear">
	<br>
</div>

{% if user_role.id_role != 4 %}
	{% include './components/new-sale-button.php'%}
{% endif %}

<div class="clear">
	<br>
</div>