$(function(){
   
    $('form').submit(function(e){
        var c= validarCorreo();
        // var n= compararNombre();
        var p= validarPassword();
        
        /*Terminar de añadir*/
            
        if(!c || !p){ /*Terminar de añadir*/
            e.preventDefault();  //"Se para ....
        }else{
            alert ("enviado");
        }  
    });    
    
    function validarCorreo(){
        
        var correo = $('#email').val();
        var regex = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        var estadoCorreo = false;
        
        //Con .trim() quitamos espacios anteriores y posteriores del campo antes de validarlo
        if(regex.test(correo.trim()) && correo !== ""){     /*Además de ser un correo no puede ser una cadena vacía*/
           estadoCorreo = true;
        }else{
            var spanE = $('#mensajeE');
            spanE.text('*Campo incorrecto'); 
        }
        return estadoCorreo;
    }
    
    function validarPassword(){
        
        var pass = $('#password').val();
        var verifi = $('#verificar').val();
        var estadoVerifi = false;
        
        if (pass.length===6 && pass === verifi){
            estadoVerifi = true;
            
        }else{
            var spanP = $('#mensajeP');
            spanP.text('*Campo incorrecto');
            
            var spanPV = $('#mensajePV');
            spanPV.text('*Campo incorrecto');
            
        }
        return estadoVerifi; 
    }
    
    function validarNombre(){
        
        var nombre = $('#nombre').val();
        var estadoNombre=false;
        
        if(nombre.length != ""){
            estadoNombre=true;
        }else{
            /*  Sacar mensaje de error*/
        } 
        return estadoNombre;
        
    }
    
    
    
});