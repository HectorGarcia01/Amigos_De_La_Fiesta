/*Para abrir la ventana del login cliente*/
function AbrirUsuario(){
    /*Para hacer invisible u ocultar el registro de clientes*/
    document.getElementById("ventanaLoginC").style.display="block";
}

/*Para cerrar y limpiar la ventana del login cliente*/
function cerrarVentana(){
    /*Para volver a desaparecer la ventana*/
    document.getElementById("ventanaLoginC").style.display="none";
    LimpiarLoginCliente1();
}

/*Para limpiar los input de los login*/
function LimpiarLoginCliente1() {
    document.getElementById('LogClient').reset();
    document.getElementById("UsuarioCliente").style.borderColor = "black";
    document.getElementById("ContraCliente").style.borderColor = "black";
}