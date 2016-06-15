function validardos(){

if(document.getElementById("cuit").value==''){
		document.getElementById("cuit").focus();
		alert('Debe ingresar un cuit');
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
		
		return true;
		}