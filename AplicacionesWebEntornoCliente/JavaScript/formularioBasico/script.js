(function(){
    
    var envio = document.getElementById('formulario');
    
    envio.addEventListener('submit', enviar); // A envio le aplicamos el metodo add.... que es un event... y se le pasan como parametros el tipo del evento y la funcion que lo va a manejar
     
     /*
     Modificar el ejercicio para que la función de evaluar la longitud pueda ser reutilizable 
     y que al pulsar el botón de reset este pida confirmación.
     */
     
    function enviar(e){     //Declaramos la función enviar y le pasamos el evento para así poder controlar cuando se cancela.

    var estadoNombre = validarNombre();
    var estadoProvincia = validarProvincia(); //Minimo 3 caracteres
    var estadoPass = validarPass();         //Minimo 6 carateres
    var estadoEmail = validarEmail();
    var estadoSexo = validarSexo();
    
        if( estadoNombre==false || estadoPass==false || estadoEmail==false || estadoSexo == false || estadoProvincia == false){
            e.preventDefault();
        }
        
        function validarNombre(){
            
            var nombre = document.getElementById('nombre').value;
            var estadoNombre=false;
            
            if(nombre.length != ""){
               estadoNombre = true;
            }else{
                var error = document.getElementById('error');
                error.innerText="*CampoIncorrecto";
            }
            return estadoNombre;
        }
        
        function validarProvincia(){
            var provincia = document.getElementById('provincia');
            var estadoProvincia=false;
            
            if(provincia.length < 6                                                                                                                                                                                                                                                                                                                 ){
               estadoProvincia = true;
            }else{
                var errorPrv = document.getElementById('error');
                errorPrv.innerText="*CampoIncorrecto";
            }
            return estadoProvincia;
        }
        
        function validarPass(){
            
            var estadoPass = false;
            var pass = document.getElementById('pass').value;
            var pass2 = document.getElementById('pass2').value;
            
            if(pass != "" && pass==pass2){
               estadoPass=true;
            }else{
                var errorP = document.getElementById('errorP');
                 errorP.innerText="*CampoIncorrecto";
            }
            return estadoPass;
        }
        
        function validarEmail(){
            
            
            var estadoEmail = false;
            var expr = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
            var email = document.getElementById('email').value;
           
            if(expr.test(email)==true && email.length != ""){
                estadoEmail = true;
            }else{
                var errorE = document.getElementById('errorE');
                errorE.innerText="*CampoIncorrecto";
            }
            return estadoEmail;
             
        }
        
        function validarSexo(){
            
            var estadoSexo = false;
            var sexo = document.getElementsByName('radio');
            
            for( var i=0; i<sexo.length ; i++ ){
            
                if(sexo[i].checked==true){
                    estadoSexo = true;
                }else{
                    var errorS = document.getElementById('errorS');
                   errorS.innerText="*CampoIncorrecto";
                }
                return estadoSexo;
            }
            
            
            // if(sexo[0].checked==true || sexo[1].checked==true){
            //     estadoSexo=true;
            // }else{
            //      errorS.innerText="*CampoIncorrecto";
            // }
            // return estadoSexo;
        }
        
        
        /*Aquí metemos las validaciones de los campos*/
        
        
        
        
        
    }
    
    
}());