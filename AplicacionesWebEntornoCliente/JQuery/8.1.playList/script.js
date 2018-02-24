$function(){
  
function enviarCancion(){
    
    e.preventDefault;
    
   var formulario = $("#formulario");
   var cancion = $("#cancion").value;
   
   if (cancion === ""){
       var error = $("#error");
       error.text('Introduzca una canción');
   }else{
        var ul = $('ul').append('<li>');
   }
}

$('#agragar').on('click',enviarCancion);

});