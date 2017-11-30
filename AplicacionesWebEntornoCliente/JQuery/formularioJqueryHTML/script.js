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
        
        var correo = $('input[name="email"]').val();
        var regex = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        var estadoCorreo = false;
        
        //Con .trim() quitamos espacios anteriores y posteriores del campo antes de validarlo
        if(regex.test(correo.trim()) && correo !== ""){     /*Además de ser un correo no puede ser una cadena vacía*/
           estadoCorreo = true;
        }else{
            var span = $('.mensaje').text('*Campo incorrecto'); 
        }
        return estadoCorreo;
    }
    
    function validarPassword(){
        
        var pass = ('input[name="password"]').val();
        var verifi = ('input[name="verificar"]').val();
        var estadoVerifi = false;
        
        if (pass.length===6 && pass === verifi){
            estadoVerifi = true;
            
        }else{
            /*Crear nodo span y meterlo en el dom al lugar donde le corresponda*/ /*Modificar el DOM con jq*/
            var span = $('.mensajePass').text('*Campo incorrecto, las contraseña deben tener 6 caracteres y ser iguales');
        }
        return estadoVerifi; 
    }
    
});