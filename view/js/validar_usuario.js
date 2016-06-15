function validar(){
	if(document.getElementById("username").value==''){
		document.getElementById("username").focus();
		alert('Debe ingresar un nombre de usuario');
		return false;
		}
	if(document.getElementById("password").value==''){
		document.getElementById("password").focus();
		alert('Debe ingresar una contraseña');
		return false;
		}
	if(document.getElementById("email").value==''){
		document.getElementById("email").focus();
		alert('Debe ingresar un email');
		return false;
		}	
		
	if(document.getElementById("cuit-csi").value==''){
		document.getElementById("cuit-csi").focus();
		alert('Debe ingresar un cuit');
		return false;
		}
	if (!(document.getElementById("cuit-csi").value.match(/^\d*$/))) {
		document.getElementById("cuit-csi").focus();
		alert('Debe ingresar solo numeros en cuit');
		return false;
		}	
	if (document.getElementById("cuit-csi").value.length != 11 ) {
		document.getElementById("cuit-csi").focus();
		alert('Longitud del cuit invalida');
		return false;
		}
	if( document.getElementById("roles").selectedIndex == null || document.getElementById("roles").selectedIndex == 0 ) {
		document.getElementById("roles").focus();
		alert('Debe seleccionar una opcion de la lista');
		return false;
		}	
	expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(document.getElementById("email").value) ) {
        alert("Error: La dirección de correo es incorrecta.");
		return false;
		}
	return true;
}