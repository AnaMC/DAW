(function() {
    function envio(e) {
        //Se cancela el submit para que no se realice la validacion
        e.preventDefault();
        var cancion = document.getElementById("cancion");
        var nombreCancion = cancion.value;
        if (nombreCancion == "") {
            alert("Introduzca una canción");
        }
        else {
            var li = document.createElement("li");
            li.textContent = nombreCancion + ' \n ';
            var ul = document.getElementById("listaCanciones");
            ul.appendChild(li);
        }
        cancion.value = ""; //Limpiamos el campo
    }
    document.getElementById('formulario').addEventListener('submit', envio);
})();