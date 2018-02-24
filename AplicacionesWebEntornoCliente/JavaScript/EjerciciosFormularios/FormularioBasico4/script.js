(function(){
    
    var formulario = document.getElementById('formInscripcion');
    formulario.addEventListener('submit', enviar);
    
    var resetar = document.getElementById('borrar');
    resetar.addEventListener('clic', resetar);
    
    var checkbox = document.getElementById('checkbox');
    checkbox.addEventListener('change', enabled);
    
    function enviar(e){
        var nombre = generica('nombre', 3, 'mensajeN');
        var apellidos = generica('apellidos', 4 ,'mensajeA');
        
        if(  !nombre || !apellidos){
            e.preventDefault();
        }
    }
    
    function resetar(e){
        if(!confirm("¿Sure?")){
            e.preventDefault();
        }
    }
    
    function enabled(){
        var checkbox = document.getElementById('checkbox');
        var boton = document.getElementById('envio');
       
        if(checkbox.checked){
            boton.disabled=false;
        }
    }
    
    function generica (id, longitud ,idError){
        var elemento = document.getElementById(id);
        var r = false;
        if(elemento > longitud){
            r = true;
        }else{
        var error = document.getElementById(idError);
        error.innerText = 'Error';
        }
    }
    
    function email(){
        var email = document.getElementById('email').value;
        var regEgex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;   
        var r = false;
        
        if(!regEgex.test(email.value)){
            r=true;
        }else{
            var error = document.getElementById('mensajeE');
            error.innerText = 'error'
        }
        
    }
    
    
})();