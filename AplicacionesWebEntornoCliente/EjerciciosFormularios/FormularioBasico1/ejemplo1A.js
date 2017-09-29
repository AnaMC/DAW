'use strict'; //Motor de análisis de formularios, muy ESTRICTO.

 (function(){
 
 //Creamos una variable para el frmulario con el ID del formulario
 
 var formulario = document.getElementById("formulario");
     formulario.addEventListener('submit', validar); //Función de validar

    function comprobar(){
        var respuestas = document.getElementsByName("radio");
        
        for( var i=0; respuestas.length; i++){ // Bucle que comprobara que se recorran todas las respuestas que hemos guardado en ''respuestas'' por su name (radio) 
            
            if (respuestas[i].checked){  //Como es un radio butttom chequeamos que por  lo menos una esté seleccionada, sin importarnos cual sea.                
                return true;
            }                   
                                
        }
        return false;
    }

    function validar(e){ //La función comprobar ha tomado valor true o false, segun el resultado actuará de una forma u otra. le damos nombre al evento que se va a producir al pulsar enviar (e). -> e esta relacionada con el evento submit que se dispara con validar, ''por eso js. sabe que hacer con e''.
        
        if(comprobar == true){
            window.alert("El formulario se enviará");
        }else{
            e.preventDefault(); //Si existe un error en el formulario este no se enviará
            window.alert("Los datos no son correctos");
        }
    }
 
 }());