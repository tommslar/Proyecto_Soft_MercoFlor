function validartres(){

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
		
		return true;
		}