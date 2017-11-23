$(function(){
   
    $('form').submit(function(e){
        var c= validarCorreo();
        var n= compararNombre();
        
        if(!c || !n){
            e.preventDefault();  //"Se para ....
        }  
    });    
    
    function validarCorreo(){
        
        var correo = $('input[name="correo"]').val();
        var regex = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        var estadoCorreo = false;
        
        //Quitamos espacios anteriores y posteriores del campo antes de validarlo
        if(regex.test(correo.trim())){
           estadoCorreo = true;
        }else{
            alert('Campo incorrecto');           
        }
        return estadoCorreo;
    }
    
    function compararNombre(){
        
        var nombreA = $('input[name="nombreA"]').val();
        var nombreB = $('input[name="nombreB"]').val();
        var estadoNombre = false;
        //Quitamos posibles espacios
        if(nombreA.trim() === nombreB.trim()){
            estadoNombre=true;
            alert('guay2');
        }else{
            alert('Campo incorrecto');           
        }
        return estadoNombre;
    }    
});
