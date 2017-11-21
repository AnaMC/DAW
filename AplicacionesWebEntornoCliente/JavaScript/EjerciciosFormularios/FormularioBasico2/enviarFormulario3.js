'use strict';

(function(){
    
    var formulario = document.getElementByIdById('formulario1');
    
    formulario.addEventListener('submit', validar);
    
    function comprobar(){
     
    //VALIDACION CHECK
        
        var checkedad = document.getElementByName('edad');
        
        for ( var i=0; checkedad.length; i++ ){
            
            if (checkedad[i].checked){
                return true;
            }
                return false;
        }
        
        var
        
    //VALIDACION CAMPOS DE TEXTO 
        
        var textoNombre = document.getElementById('nombre');
        
            if(textoNombre.length == 0){
                alert('Campo obligatotio sin rellenar');
                e.preventDefault(); //Si NO hay nombre en el formulario no se enviará
            }
        
       // var textoEmail = document.getElementById('email');
      
        
            //if(){
             //  alert('Campo obligatotio incorrecto');
              //  e.preventDefault();
              // }
        
        /*function validarCorreo(){
            
            var textoEmail = document.getElementById('email');
            var corteA = textoEmail.split('@');
            var corteB = textoEmail.split('.'); 
                                          
            if (textoEmail.length > 0 && corteA){
                
                if(textoEmail.length > 0 && corteB){   
                    //SE ENVÍA
                }
                
            alert('Campo incorrecto');
            e.preventDefault();        
                
            }
               
        }
        */
        
    }
}
}())