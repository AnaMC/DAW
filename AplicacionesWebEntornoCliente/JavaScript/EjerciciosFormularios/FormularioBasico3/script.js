(function(){
   
// Validaciones básicas:
// Nombre: minimo 3 caracteres ; Apellidos: minimo 9 caracteres;
// Telefono: 9digitos; correo: valido; 
// Descrpcion: 140 caracteres, muestra los restantes
// Genero: H/M/O
// reset con confirmación
// checkbox bloqueo enviar
    
var formulario = document.getElementById('formInscripcion');
formulario.addEventListener('submit', enviar); //Manejador de eventos, el formularió escuchará el submit y ejecutará la función

var reset = document.getElementById('borrar');
reset.addEventListener('click', resetear);

var checkbox = document.getElementById('checkbox');
checkbox.addEventListener('change',  enabled );

function enviar(e){ // Le pasamos el evento
    if(!genero() || !email() || !nombre() || !telefono() ){
       e.preventDefault(); 
    }
}

function genero(){
    var genero = document.getElementsByName('genero');
    var errorGen = document.getElementById('mensajeGen');
    var r = false;
    for (var i=0; i<genero.length; i++){
        if(genero[i].checked){
            r = true;
        }
    }
    if (!r) {
        errorGen.innerText = '*Campo obligatorio'; 
    }
    return r;
}

function email(){
    var email = document.getElementById('email');
    var value = email.value;
    var expreg = new RegExp("/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i");
    var mensajeE = document.getElementById('mensajeE');
    var r= false; 
    
    if(!expreg.test(email.value)){
        r = true;
    }
    if (!r) {
        mensajeE.innerText = '*Campo incorrecto'; 
    }
    if(email.value === ""){
        mensajeE.innerText = '*Campo obligatorio'; 
    }
    return r;
}

function enabled(){
    
    var r = false;
    var boton = document.getElementById('envio');
    
    if( checkbox.checked){
        r = true;
        boton.disabled = false;
    }
}

function resetear(e){ //Le pasamos el evento (reset)
    if(!confirm("¿Estás seguro de que deseas borrar todos los datos?")){
        e.preventDefault();
    }
}  
  
  
function nombre() {
    var nombre = document.getElementById('nombre');
    var mensajeN = document.getElementById('mensajeN');
    var r = false;
    
    if (nombre.value.length >= 3 && nombre.value.length !== ""){
        r = true;
    }else{
        mensajeN.innerText = '*Campo obligatorio incorrecto';
    }
    return r;
} 

function telefono(){
    var telefono = document.getElementById('telefono');
    var mensajeTelf = document.getElementById('mensajeTelf');
    var r = false;
    
    if(telefono.value.length >= 9){
        r = true;
    }else{
        mensajeTelf.innerText = '*Campo incorrecto';
    }
    return r;
}
  
  
//  function caracteres(){
//      var nCaracteres = document.getElementById('textArea').maxLength;
//      var disponibles = document.getElementById('disponibles');
     
//      disponibles.innerText = 'quedan ' + nCaracteres;
     
//  }


    
})();