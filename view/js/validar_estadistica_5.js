function validarcinco(){

	if (!(document.getElementById("umbral").value.match(/^\d*$/))) {
		document.getElementById("umbral").focus();
		alert('Debe ingresar solo numeros en umbral');
		return false;
		}
		
		if (!(document.getElementById("dintel").value.match(/^\d*$/))) {
		document.getElementById("dintel").focus();
		alert('Debe ingresar solo numeros en dintel');
		return false;
		}
		
				
		return true;
		}