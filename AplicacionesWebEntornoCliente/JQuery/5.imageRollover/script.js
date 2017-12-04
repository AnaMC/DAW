$(document).ready(function() {
    $("#foto1").hover(
        function(){ // Función anonima de lo que va a pasar cuando el ratón entra en la foto, si quisieramos que tenga nombre se declara fuera "Como de toda la vida"
            $(this).attr("src","h2.jpg"); /*.attr() Permite modificar un atributo del selector que deseemos*/
        },
        function(){
             $(this).attr("src","h1.jpg");
        } //// Función anonima de lo que va a pasar cuando el ratón sale de la foto
        );
    
      $("#foto2").hover(
        function(){ 
            $(this).attr("src","h6.jpg");
        },
        function(){
             $(this).attr("src","h3.jpg");
        } 
        );
    
      $("#foto3").hover(
        function(){
            $(this).attr("src","h4.jpg");
        },
        function(){
             $(this).attr("src","h5.jpg");
        } 
        );
});