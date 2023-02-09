function Terminar(){
    location.href = "loading.html";
}

const VentNod = document.querySelector('#btnNodal');

VentNod.addEventListener('mouseover', e => {
    document.getElementById("ventana_nodal").style.display="block";
});

VentNod.addEventListener('mouseout', e => {
    var Desaparecer = function(){
        document.getElementById("ventana_nodal").style.display="none";
    };
    setTimeout(Desaparecer,3500);
});

/*
document.querySelector("#apellidoUsuario").innerHTML = "Hector";
document.querySelector("#tipoUsuario").innerHTML = "Hector";
*/

