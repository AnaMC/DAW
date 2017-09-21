/* ejDOM1.js */
(function() {
    window.addEventListener('load', inicio); /*Definimos una asociación entre la función inicio cuando se produce el evento load, 
                                             La función se ejecutará cunando se produzca el evento*/

    function inicio() {     /*Definimos la función inicio*/
        var miBoton = document.getElementById('ocultar'); /*En la variable miBoton metemos el elemento ocultar     (pero por ID), incluídas las etiquetas propias de HTML*/
        var miBoton2 = document.getElementById('rellenar');  /*"*/
        var miBoton3 = document.getElementById('cambiar');
        var miBoton4 = document.getElementById('mostrar');
        miBoton.addEventListener('click', insertar); /*Al botón (miBoton) le decimos que escuche el evento (click) para que cuando este se produzca se ejecute la función insertar*/
        miBoton2.addEventListener('click', rellenar);
        miBoton3.addEventListener('click', cambiar);
        miBoton4.addEventListener('click', mostrar);

        function insertar() {
            var ocultar = document.getElementsByClassName("ocultar"), 
                ocultarLongitud = ocultar.length;
            // Recorremos todos lo elementos cuya clase sea "ocultar"
            for (var i = 0; i < ocultarLongitud; i++) {
                ocultar[i].classList.add('oculto');
               
            }
            
            miBoton4
        }

        function rellenar() {
            var spanVacio = document.querySelector("#miParrafo span:last-child"); // Obtiene el último span
            spanVacio.textContent = "Ya no está vacío "; // Y le pone texto
        }

        function cambiar() {
            //Otra forma, ahora partimos de un nodo, no de todo el documento:
            var miParrafo = document.getElementById("miParrafo"), // Obtiene una referencia a miParrafo
                miSpan = miParrafo.querySelector("span:last-child"); // Obtiene una referencia al último span en el párrafo
            miSpan.textContent = "Lo cambio de nuevo"
        }
        
        function mostrar(){ //Función que mostrará el párrafo ocultado
            
        }
    }
}());