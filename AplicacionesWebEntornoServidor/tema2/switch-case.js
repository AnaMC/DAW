window.onload = function () {
  var boton = document.getElementById("boton");
  boton.onclick = queDia;
    var boton2 = document.getElementById("boton2");
    boton2.onclick = finde;
}
function queDia()
{
  var x;
  var dia=new Date().getDay();
  switch (dia){
    case 0:
      x="Hoy es domingo";
      break;
    case 1:
      x="Hoy es lunes";
      break;
    case 2:
      x="Hoy es martes";
      break;
    case 3:
      x="Hoy es miércoles";
      break;
    case 4:
      x="Hoy es jueves";
      break;
    case 5:
      x="Hoy es viernes";
      break;
    case 6:
      x="Hoy es sábado";
      break;
  }
  document.getElementById("demo").innerHTML=x;
}
function finde()
{
  var x;
  var dia=new Date().getDay();
  switch (dia){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
      x="Día de trabajo";
      break;
    case 6: //Ejecuta hacia abajo hasta que encuentra un break
    case 0:
         x="Finde!!!";
    break; 
  }
  document.getElementById("demo").textContent=x;
}