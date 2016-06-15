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
	if(document.getElementById("desde").value==''){
		document.getElementById("desde").focus();
		alert('Debe ingresar una fecha inicial');
		return false;
		}
	if(document.getElementById("hasta").value==''){
		document.getElementById("hasta").focus();
		alert('Debe ingresar una fecha final');
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
	if (!(document.getElementById("desde").value.match(/^\d{2,4}\-\d{1,2}\-\d{1,2}$/))) {
		document.getElementById("desde").focus();
		alert('Fecha de inicio incorrecta');
		return false;
		}	
	if (!(document.getElementById("hasta").value.match(/^\d{2,4}\-\d{1,2}\-\d{1,2}$/))) {
		document.getElementById("hasta").focus();
		alert('Fecha de fin incorrecta');
		return false;
		}	
	
	desde=document.getElementById("desde").value;
	hasta=document.getElementById("hasta").value;
	desde=new Date(desde);
	hasta=new Date(hasta);
	if(desde>hasta) {
		alert('Fechas erroneas');
		return false;
		}
		
	
	return true;
}