/*Para abrir la ventana del login cliente*/
function AbrirCliente() {
    /*Para hacer lo contrario del css, osea reemplazar el display:none por el display:blcok*/
    document.getElementById("ventanaLoginC").style.display = "block";
}
/*Para la validacion del login cliente*/
function IngresarCliente() {
    var Usuario_Cliente = document.getElementById('UsuarioCliente').value;
    var Contra_Cliente = document.getElementById('ContraCliente').value;

    if(Usuario_Cliente ==""){
        if(Contra_Cliente ==""){
            alert("Por favor llene los siguientes campos: Usuario y Contraseña!!");
            document.getElementById("UsuarioCliente").style.borderColor = "red";
            document.getElementById("ContraCliente").style.borderColor = "red";
        }
    }
    else if(Usuario_Cliente ==""){
        alert("Por favor llene el campo de Usuario!!");
        document.getElementById("UsuarioCliente").style.borderColor = "red";
        document.getElementById("ContraCliente").style.borderColor = "green";
    }
    else if(Contra_Cliente ==""){
        alert("Por favor llene el campo de Contraseña!!");
        document.getElementById("UsuarioCliente").style.borderColor = "green";
        document.getElementById("ContraCliente").style.borderColor = "red";
    }
    else{
        document.getElementById("UsuarioCliente").style.borderColor = "green";
        document.getElementById("ContraCliente").style.borderColor = "green";
    }
}

/*Para abrir la ventana del login abogado*/
function AbrirAbogado() {
    /*Para hacer lo contrario del css, osea reemplazar el display:none por el display:blcok*/
    document.getElementById("ventanaLoginA").style.display = "block";
}
/*Para la validacion del login abogado*/
function IngresarAbogado() {
    var Usuario_Abogado = document.getElementById('UsuarioAbogado').value;
    var Contra_Abogado = document.getElementById('ContraAbogado').value;

    if(Usuario_Abogado ==""){
        if(Contra_Abogado ==""){
            alert("Por favor llene los siguientes campos: Usuario y Contraseña!!");
            document.getElementById("UsuarioAbogado").style.borderColor = "red";
            document.getElementById("ContraAbogado").style.borderColor = "red";
        }
    }
    else if(Usuario_Abogado ==""){
        alert("Por favor llene el campo de Usuario!!");
        document.getElementById("UsuarioAbogado").style.borderColor = "red";
        document.getElementById("ContraAbogado").style.borderColor = "green";
    }
    else if(Contra_Abogado ==""){
        alert("Por favor llene el campo de Contraseña!!");
        document.getElementById("UsuarioAbogado").style.borderColor = "green";
        document.getElementById("ContraAbogado").style.borderColor = "red";
    }
    else{
        document.getElementById("UsuarioAbogado").style.borderColor = "green";
        document.getElementById("ContraAbogado").style.borderColor = "green";
    }
}

/*Para el desenfoque y enfoque de la pagina*/
const btn_desenfocCC = document.querySelector('#btnLogC');
const btn_enfocCC = document.querySelector('#CerrarLoginC');
const btn_desenfocCA = document.querySelector('#btnLogA');
const btn_enfocCA = document.querySelector('#CerrarLoginA');
const menuCLog = document.querySelector('#headerCont');
/*Para desenfocar todo despues de abrir el login cliente*/
btn_desenfocCC.addEventListener('click', e => {
    menuCLog.classList.toggle("headerCont_desenfocado");
    menuCLog.classList.toggle("headerCont");
});
/*Para enfocar todo despues de cerrar el login cliente*/
btn_enfocCC.addEventListener('click', e => {
    menuCLog.classList.toggle("headerCont");
    menuCLog.classList.toggle("headerCont_desenfocado");
});
/*Para desenfocar todo despues de abrir el login abogado*/
btn_desenfocCA.addEventListener('click', e => {
    menuCLog.classList.toggle("headerCont_desenfocado");
    menuCLog.classList.toggle("headerCont");
});
/*Para enfocar todo despues de cerrar el login abogado*/
btn_enfocCA.addEventListener('click', e => {
    menuCLog.classList.toggle("headerCont");
    menuCLog.classList.toggle("headerCont_desenfocado");
});

/*Para cerrar la ventana del login cliente*/
function cerrarVentanaC() {
    /*Para volver a desaparecer la ventana*/
    document.getElementById("ventanaLoginC").style.display = "none";
}

/*Para cerrar la ventana del login abogado*/
function cerrarVentanaA() {
    /*Para volver a desaparecer la ventana*/
    document.getElementById("ventanaLoginA").style.display = "none";
}

/*Para hacer visible la descripcion acesorcorp*/
function visible1() {
    document.getElementById("other1").style.display = "block";
}
/*Para hacer visible lo de nosotros*/
function visible2() {
    document.getElementById("other2").style.display = "block";
}
/*Para hacer visible lo de nuestro equipo*/
function visible3() {
    document.getElementById("other3").style.display = "block";
}
/*Para hacer visible lo de resenias*/
function visible4() {
    document.getElementById("other4").style.display = "block";
}

/*Para hacer invisible la descripcion acesorcorp*/
function invisible1() {
    document.getElementById("other1").style.display = "none";
}
/*Para hacer invisible lo de nosotros*/
function invisible2() {
    document.getElementById("other2").style.display = "none";
}
/*Para hacer invisible lo de nuestro equipo*/
function invisible3() {
    document.getElementById("other3").style.display = "none";
}
/*Para hacer invisible lo de resenias*/
function invisible4() {
    document.getElementById("other4").style.display = "none";
}

/*Para hacer visible lo de contactos*/
function visible_contacto() {
    document.getElementById("contenedor_contacto").style.display = "block";
}

/*Para hacer invisible lo de contactos y enviar correo o mensaje*/
function invisible_contacto() {
    /*Para comprobar si los campos estan vacios*/
    var Nombre = document.getElementById('contact_name').value;
    var Email = document.getElementById('contact_email').value;
    var Org = document.getElementById('contact_organization').value;
    var Mensaje = document.getElementById('texta').value;

    if(Nombre ==""){
        if(Email ==""){
            if(Mensaje ==""){
                alert("Por favor llene los siguientes campos: Nombre, Email y Mensaje!!");
                document.getElementById("contact_name").style.borderColor = "red";
                document.getElementById("contact_email").style.borderColor = "red";
                document.getElementById("texta").style.borderColor = "red";
            }
        }
        else if(Email ==""){
            alert("Por favor llene los siguientes campos: Nombre y Email!!");
            document.getElementById("contact_name").style.borderColor = "red";
            document.getElementById("contact_email").style.borderColor = "red";
            document.getElementById("texta").style.borderColor = "green";
        }
        else if(Mensaje ==""){
            alert("Por favor llene los siguientes campos: Nombre y Mensaje!!");
            document.getElementById("contact_name").style.borderColor = "red";
            document.getElementById("contact_email").style.borderColor = "green";
            document.getElementById("texta").style.borderColor = "red";
        }
    }
    else if(Email ==""){
        if(Mensaje ==""){
            alert("Por favor llene los siguientes campos: Email y Mensaje!!");
            document.getElementById("contact_name").style.borderColor = "green";
            document.getElementById("contact_email").style.borderColor = "red";
            document.getElementById("texta").style.borderColor = "red";
        }
    }
    else if(Nombre ==""){
        alert("Por favor llene el campo de Nombre!!");
        document.getElementById("contact_name").style.borderColor = "red";
        document.getElementById("contact_email").style.borderColor = "green";
        document.getElementById("texta").style.borderColor = "green";
    }
    else if(Email ==""){
        alert("Por favor llene el campo de Email!!");
        document.getElementById("contact_name").style.borderColor = "green";
        document.getElementById("contact_email").style.borderColor = "red";
        document.getElementById("texta").style.borderColor = "green";
    }
    else if(Mensaje ==""){
        alert("Por favor llene el campo de Mensaje!!");
        document.getElementById("contact_name").style.borderColor = "green";
        document.getElementById("contact_email").style.borderColor = "green";
        document.getElementById("texta").style.borderColor = "red";
    }
    else{
        alert("Su mensaje se ha enviado con exito!!");
        limpiar();
        document.getElementById("contenedor_contacto").style.display = "none";
    }
    if(Org !=""){
        document.getElementById("contact_organization").style.borderColor = "green";
    }

    /*validacion anterior
    if(Nombre ==""){
        if(Email ==""){
            if(Mensaje ==""){
                alert("Por favor llene los siguientes campos: Nombre, Email y Mensaje!!");
            }
        }
    }
    else if(Nombre ==""){
        if(Email ==""){
            alert("Por favor llene los siguientes campos: Nombre y Email!!");
        }
    }
    else if(Nombre ==""){
        if(Mensaje ==""){
            alert("Por favor llene los siguientes campos: Nombre y Mensaje!!");
        }
    }
    else if(Email ==""){
        if(Mensaje ==""){
            alert("Por favor llene los siguientes campos: Email y Mensaje!!");
        }
    }
    else if(Nombre ==""){
        alert("Por favor llene el campo de Nombre!!");
    }
    else if(Email ==""){
        alert("Por favor llene el campo de Email!!");
    }
    else if(Mensaje ==""){
        alert("Por favor llene el campo de Mensaje!!");
    }
    else{
        alert("Su mensaje se ha enviado con exito!!");
        limpiar();
        document.getElementById("contenedor_contacto").style.display = "none";
    }*/
}

/*Para cambiar el color del borde de los input cuando no se llenan los campos obligatorios
document.querySelector("#FORMULARIO").onsubmit = function() {
    inputs = document.querySelectorAll("#FORMULARIO input[id=contact_name]");
    inputs2 = document.querySelectorAll("#FORMULARIO input[type=email]");
    textareas = document.querySelectorAll("#FORMULARIO textarea");
    valido = true; 
    for(i=0; i<inputs.length; i++){
        input = inputs[i]; 
        if(input.value == ''){
            input.className = 'erro';
            valido = false;
        }
    }
    for(j=0; j<inputs2.length; j++){
        input2 = inputs2[j]; 
        if(input2.value == ''){
            input2.className = 'erro';
            valido = false;
        }
    }
    for(k=0; k<textareas.length; k++){
        textarea = textareas[k]; 
        if(textarea.value == ''){
            textarea.className = 'erro';
            valido = false;
        }
    }
    return valido; 
};*/

/*Para limpiar el formulario*/
function limpiar() {
    document.getElementById('FORMULARIO').reset();
}