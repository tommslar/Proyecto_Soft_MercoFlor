function validarseis(){

if (document.getElementById("op").selectedIndex == null || document.getElementById("op").selectedIndex == 0 ) {
		document.getElementById("op").focus();
		alert('Debe seleccionar una opcion de la lista');
		return false;
		}	
		return true;
		}