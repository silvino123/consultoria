var centesimas = 0;
var segundos = "00";
var minutos = "00";
var horas = "00";

var obj = []

function timedCount() {
    cronometro()
    postMessage({"centesimas" : centesimas,"segundos": segundos, "minutos":minutos,"horas":horas});
    setTimeout("timedCount()",10);
}
function cronometro () {
    if (centesimas < 99) {
      centesimas++;
      if (centesimas < 10) { centesimas = "0"+centesimas }

    }
    if (centesimas == 99) {
      centesimas = -1;
    }
    if (centesimas == 0) {
      segundos ++;
      if (segundos < 10) { segundos = "0"+segundos }

    }
    if (segundos == 59) {
      segundos = -1;
    }
    if ( (centesimas == 0)&&(segundos == 0) ) {
      minutos++;
      if (minutos < 10) { minutos = "0"+minutos }

    }
    if (minutos == 59) {
      minutos = -1;
    }
    if ( (centesimas == 0)&&(segundos == 0)&&(minutos == 0) ) {
      horas ++;
      if (horas < 10) { horas = "0"+horas }

    }
}


timedCount();