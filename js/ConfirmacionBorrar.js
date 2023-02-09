function confirmacion(e){
    if(confirm("¿Estás seguro que deseas eliminar este registro?")){
        location.href = "ControladorBorrarRegistroUsuario.php";
    }
    else{
        e.preventDefault();
    }
}

let btnBorrar = document.querySelector(".btnBorrarRegistro");

btnBorrar.addEventListener('click', confirmacion);