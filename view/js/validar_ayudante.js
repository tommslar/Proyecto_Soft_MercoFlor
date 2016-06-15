function validar(){
	if(document.getElementById("nombre").value==''){
		document.getElementById("nombre").focus();
		alert('Debe ingresar un nombre');
		return false;
		}
	if(document.getElementById("apellidos").value==''){
		document.getElementById("apellidos").focus();
		alert('Debe ingresar un apellido');
		return false;
		}
	if(document.getElementById("cuit").value==''){
		document.getElementById("cuit").focus();
		alert('Debe ingresar un cuit');
		return false;
		}	
	if(document.getElementById("dni").value==''){
		document.getElementById("dni").focus();
		alert('Debe ingresar un dni');
		return false;
		}	

	if (!(document.getElementById("nombre").value.match(/^[A-Za-záéíóúñ\s]*$/))) {
		document.getElementById("nombre").focus();
		alert('Debe ingresar solo letras en nombre');
		return false;
		}
	if (!(document.getElementById("apellidos").value.match(/^[A-Za-záéíóúñ\s]*$/))) {
		document.getElementById("apellidos").focus();
		alert('Debe ingresar solo letras en apellido');
		return false;
		}	
			if (document.getElementById("cuit").value.length != 11 ) {
		document.getElementById("cuit").focus();
		alert('Longitud del cuit invalida');
		return false;
		}
	if (document.getElementById("dni").value.length != 8 ) {
		document.getElementById("dni").focus();
		alert('Longitud del dni invalida');
		return false;
		}
	if (!(document.getElementById("cuit").value.match(/^\d*$/))) {
		document.getElementById("cuit").focus();
		alert('Debe ingresar solo numeros en cuit');
		return false;
		}
	if (!(document.getElementById("dni").value.match(/^\d*$/))) {
		document.getElementById("dni").focus();
		alert('Debe ingresar solo numeros en dni');
		return false;
		}	

	return true;
}