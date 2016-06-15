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
	
	return true;
}