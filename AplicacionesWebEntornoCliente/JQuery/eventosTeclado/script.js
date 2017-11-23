$(function(){
    
function eventoTeclado(evento){
   $("#texto").html($("#texto").html() + evento.type + ": " + evento.which + ", ")
}
$(document).ready(function(){
   $(document).keypress(eventoTeclado);
   $(document).keydown(eventoTeclado);
   $(document).keyup(eventoTeclado);
})
    
});