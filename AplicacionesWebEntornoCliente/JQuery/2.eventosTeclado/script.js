$(function(){
    
function eventoTeclado(evento){
    
    /*- String.fromCharCode(evento.which) convierte el código del caracter en el caracter correspondiente.
    */
    
    var text = $("#texto").text(); /*Recogemos el texto que tenemos en una variable para poder agregarle cada vez más texto y que no lo sustituya cada vez que tenga que imprimir uno nuevo por pantalla*/
    
    /*Le indicamos que a lo que ya hay le agregue el texto*/
    text += "Tipo de evento: " + evento.type + ", codigo del caracter pulsado: " + evento.which + ", caracter pulsado: " + String.fromCharCode(evento.which) + "\n";
    
    /*Devuelve el texto actualizado al elemento */
    $("#texto").text(text); 
    
}
    
$(document).ready(function(){
    
    /*
    * Keypress() -> Pulsar tecla
    * keydown() -> Tecla pulsada
    * keyup() -> Tecla levantada
    */
 
    $(document).on('keypress', eventoTeclado);
    $(document).on('keyup', eventoTeclado);
    $(document).on('keydown', eventoTeclado);
})
    
});