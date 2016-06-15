function validar(){

if (document.getElementById("oph").selectedIndex == null || document.getElementById("oph").selectedIndex == 0 ) {
		document.getElementById("oph").focus();
		alert('Debe seleccionar una opcion de la lista');
		return false;
		}
		if (document.getElementById("opr").selectedIndex == null || document.getElementById("opr").selectedIndex == 0 ) {
		document.getElementById("opr").focus();
		alert('Debe seleccionar una opcion de la lista');
		return false;
		}
		if (document.getElementById("opes").selectedIndex == null || document.getElementById("opes").selectedIndex == 0 ) {
		document.getElementById("opes").focus();
		alert('Debe seleccionar una opcion de la lista');
		return false;
		}
		if (document.getElementById("opep").selectedIndex == null || document.getElementById("opep").selectedIndex == 0 ) {
		document.getElementById("opep").focus();
		alert('Debe seleccionar una opcion de la lista');
		return false;
		}
		
	if(document.getElementById("vulgar").value==''){
		document.getElementById("vulgar").focus();
		alert('Debe ingresar un nombre vulgar');
		return false;
		}
	if(document.getElementById("cientifico").value==''){
		document.getElementById("cientifico").focus();
		alert('Debe ingresar un nombre cientifico');
		return false;
		}
		if (!(document.getElementById("vulgar").value.match(/^[A-Za-záéíóúñ\s]*$/))) {
		document.getElementById("vulgar").focus();
		alert('Debe ingresar solo letras en nombre vulgar');
		return false;
		}
	if (!(document.getElementById("cientifico").value.match(/^[A-Za-záéíóúñ\s]*$/))) {
		document.getElementById("cientifico").focus();
		alert('Debe ingresar solo letras en nombre cientifico');
		return false;
		}	
	if (!(document.getElementById("nombre").value.match(/^[A-Za-záéíóúñ\s]*$/))) {
		document.getElementById("nombre").focus();
		alert('Debe ingresar solo letras en nombre');
		return false;
		}

		
	return true;
}