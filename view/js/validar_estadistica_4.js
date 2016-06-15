function validarcuatro(){

	if (!(document.getElementById("anio").value.match(/^\d*$/))) {
		document.getElementById("anio").focus();
		alert('Debe ingresar solo numeros en años');
		return false;
		}	
		if (document.getElementById("anio").value.length != 4 ) {
		document.getElementById("anio").focus();
		alert('Longitud del año invalida');
		return false;
		}
		
			if(document.getElementById("anio").value==''){
		document.getElementById("anio").focus();
		alert('Debe ingresar un año');
		return false;
		}

		return true;
		}