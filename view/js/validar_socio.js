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
	if(document.getElementById("mail").value==''){
		document.getElementById("mail").focus();
		alert('Debe ingresar un email');
		return false;
		}	
	if(document.getElementById("direccion").value==''){
		document.getElementById("direccion").focus();
		alert('Debe ingresar una direccion');
		return false;
		}
	if(document.getElementById("razon").value==''){
		document.getElementById("razon").focus();
		alert('Debe ingresar una razon social');
		return false;
		}
	if(document.getElementById("numsocio").value==''){
		document.getElementById("numsocio").focus();
		alert('Debe ingresar un numero de socio');
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
	if (!(document.getElementById("cuit").value.match(/^\d*$/))) {
		document.getElementById("cuit").focus();
		alert('Debe ingresar solo numeros en cuit');
		return false;
		}
	if (document.getElementById("cuit").value.length != 11 ) {
		document.getElementById("cuit").focus();
		alert('Longitud del cuit invalida');
		return false;
		}		
	if( isNaN(document.getElementById("numsocio").value) ) {
		document.getElementById("numsocio").focus();
		alert('Debe ingresar solo numeros en el numero de socio');
		return false;
		}	
		
	
	return true;
}