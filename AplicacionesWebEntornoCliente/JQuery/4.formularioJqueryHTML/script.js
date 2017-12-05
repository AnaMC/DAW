$(function(){
   
    $('form').submit(function(e){
        var c = validarCorreo();
        var p = validarPassword();
        var n = validarNombre();
        var a = validarApellidos();
        var pr = validarProvincia();
        var cp = validarCP();
        var t = validarTelf();
        
        /*Terminar de añadir*/
            
        if(!c || !p || !n || !a || !pr || !cp || !t){ /*Terminar de añadir*/
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
        
        if(nombre.length !== 0){
            estadoNombre = true;
        }else{
            var mensajeN = $('#mensajeN');
            mensajeN.text('*Campo incorrecto');
        } 
        return estadoNombre;
    }
    
    function validarApellidos(){
        
        var ape = $('#apellidos').val();
        var estadoApe = false;
        
        if(ape.length !== 0){
            estadoApe = true;
        }else{
            var mensajeA = $('#mensajeA');
            mensajeA.text('*Campo incorrecto');
        }
        return estadoApe;
    }
    
    function validarProvincia(){
        
        var prov = $('#provincia').val();
        var estadoprov = false;
        
        if(prov.length === 2){
            estadoprov = true;
        }else{
            var mensajePr = $('#mensajePr');
            mensajePr.text('*Campo incorrecto');
        }
        return estadoprov;
    }
    
    function validarCP(){
        
        var cp = $('#codPostal').val();
        var estadocp = false;
        var exprCp = /^[0-9]$/;
        
        if(exprCp.test(cp.trim()) && cp.length === 9){
             estadocp = true;
        }else{
            var mensajeCp = $('#mensajeCp');
            mensajeCp.text('*Campo incorrecto');
        }
        return estadocp;
    }
    
    function validarTelf(){
        
        var telf = $('#telefono').val();
        var estadoTelf = false;
        var exprTelf = /^((\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2})$/ ;
        
        if(exprTelf.test(telf.trim())){
            estadoTelf = true;
        }else{
           var mensajeTelf = $('#mensajeTelf');
            mensajTelf.text('*Campo incorrecto');
        }
        return estadoTelf;
    }
    
});