/*
*Autor: Sergio Ruiz Bascuñana
*Actividad: Ahorcado
*/

//Inicianilizacion de variables


var letra= solucion;

var solucion="r";

console.log(solucion)

var respuesta= prompt("ELIGE UNA LETRA");

    if (respuesta!=solucion) {
      alert(" PRUEBA OTRA LETRA");
    }else if (respuesta=solucion) {
      alert("ACERTASTE");
    }
