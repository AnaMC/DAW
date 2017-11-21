'use strict';

 (function(){
 
     var formulario = document.getElementById("formulario");
            
      var aciertos=0;
      var errores=0;
      var nRespuestas=0;
      var nSinContestar=10-nRespuestas; /*Asignar al final*/
      var longComent;
      var respuestasBox = document.getElementsByName("checkbox");
      var respuestasRadio = document.getElementsByName("radio");
      var notificaciones = document.getElementById("notificaciones");
     
     //Chequeamos que las respuestas de tipo "Selección" estén seleccionadas.
     
     /*Retorna un array cuyo primer elemento es el estado del box y el segundo el estado del radio*/
     
     function checkEstado(){
         /*Pregunta tipo CheckBox*/
        
         var estadoBox = false;
         
         for (i=0; i< respuestasBox.length; i++){             
             if (respuestasBox[i].checked){ 
                estadoBox = true;
                nRespuestas++;
            } else {
                nSinContestar++;
                estadoBox = false;
            }   
         }         
              
         var estadoRadio = false;
         
          for (i=0; i< respuestasRadio.length; i++){             
             if (respuestasRadio[i].checked){ 
                estadoRadio = true;
                nRespuestas++;
            } else {
               nSinContestar++;
               estadoRadio = false;
            }   
         }
         
         var estado = [estadoBox, estadoRadio]; 
         return estado;   
     }
     
     /*Coreccion de preguntas*/
     
     function corregir(){
         
         var estado = checkEstado(); /*Guardamos el resultado del metodo en una variable para poder tratarlo.*/
         
         for(i=0; i< estado.length; i++){
             
            if(estado[0] == true && respuestasBox[i] == respuestasBox[1]){
                 aciertos ++;
            }else{
                errores++;                    
            }     
             
            if(estado[1] == true && respuestasRadio[i] == respuestasRadio[2]){
                aciertos++;
            }else{
                errores++;
            }    
            
            notificaciones.innerText = aciertos; /*Vale con cualquier etiqueta de texto*/
            
     }      
     
 }());