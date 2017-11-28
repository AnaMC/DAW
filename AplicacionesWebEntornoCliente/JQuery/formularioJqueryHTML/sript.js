$(function(){
   
    $('form').submit(function(e){
        var c= validarCorreo();
        var n= compararNombre();
        
        if(!c || !n){
            e.preventDefault();  //"Se para ....
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
        var estadoPass = false;
  
        
    }
    
});