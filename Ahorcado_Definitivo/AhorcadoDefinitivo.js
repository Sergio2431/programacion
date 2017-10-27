/*
*Autor: Sergio Ruiz
*Actividad: Ahorcado
*/

//Inicianilizacion de variables

var letra;
var letrasolucion;
var palabra= solucion;
var solucion= ["Juegos", "Familia", "Ordenador", "Animal", "Comida"];
var aleatorio= Math.round((Math.random()*2)+0);

console.log(solucion);

alert ("Bienvenido al Ahorcado!! Disfruta del juego!");
var respuesta= prompt("Elige una letra!!");

while (isNaN(letra)==true) {
num=prompt("Error, has elegido un número, elige una letra por favor!")
}

while (letra=!solucion) {
letra=prompt ("Lo siento, la letra no es correcta")
}
