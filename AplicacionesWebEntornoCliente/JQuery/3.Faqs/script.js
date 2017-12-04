$(document).ready(function(){
   
   /*$('#primer-link').click(function(){
       
       $(this).parent().next().toggle(); /*this.parent-> selecciona al padre del enlace; .next() coge a su hermano (en este caso el 1º cerrado), toogle-> alterna su visibilidad
       
       $(this).parent().toggleClass('mas');
       $(this).parent().toggleClass('menos');
       
   });*/
    
   $('a').click(function(){ /*Al coger el enlace en sí y ser generico lo podemos hacer "mas corto"*/
       
        $(this).parent().next().toggle();
         
        $(this).parent().toggleClass('mas');
        $(this).parent().toggleClass('menos');
       
   });
    
});