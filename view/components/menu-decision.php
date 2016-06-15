{% if user_role.id_role == 1 %}
	{% include './components/backend-admin.php' %}
{% elseif user_role.id_role == 2 %}
	{% include './components/backend-pers.php' %}
{% elseif user_role.id_role >= 3 %}
	{% include './components/backend-socinq.php' %}
{% endif %}