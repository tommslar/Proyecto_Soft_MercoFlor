function validar(){

	if (document.getElementById("opc").selectedIndex == null || document.getElementById("opc").selectedIndex == 0 ) {
		document.getElementById("opc").focus();
		alert('Debe seleccionar una opcion de la lista');
		return false;
		}
		if (document.getElementById("ope").selectedIndex == null || document.getElementById("ope").selectedIndex == 0 ) {
		document.getElementById("ope").focus();
		alert('Debe seleccionar una opcion de la lista');
		return false;
		}
		
    if (!(document.getElementById("fecha").value.match(/^\d{2,4}\-\d{1,2}\-\d{1,2}$/))) {
		document.getElementById("fecha").focus();
		alert('Fecha incorrecta');
		return false;
		}	

	if(document.getElementById("cuit").value==''){
		document.getElementById("cuit").focus();
		alert('Debe ingresar un cuit');
		return false;
		}	
		
	if(document.getElementById("cantidad").value==''){
		document.getElementById("cantidad").focus();
		alert('Debe ingresar una cantidad');
		return false;
		}
		
	if(document.getElementById("precio").value==''){
		document.getElementById("precio").focus();
		alert('Debe ingresar un precio');
		return false;
		}
	
	
	if (!(document.getElementById("cantidad").value.match(/^\d*$/))) {
		document.getElementById("cantidad").focus();
		alert('Debe ingresar solo numeros en cantidad');
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
	if (!(document.getElementById("precio").value.match(/^[0-9]*\.?[0-9]*$/))) {
		document.getElementById("precio").focus();
		alert('Debe ingresar un numero real');
		return false;
		}
	
		
		
	return true;
}