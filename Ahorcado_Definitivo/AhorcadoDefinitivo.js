/*
*Autor: Sergio Ruiz
*Actividad: Ahorcado
*/

//Inicianilizacion de variables

//Creacion de las palabras
var letra
var palabras=["Juegos","Familia","Ordenador","Animal","Comida"];
var aleatorio=Math.round(Math.random()*palabras.length);
console.log(aleatorio);
var palabra_aleatorio=palabras[aleatorio];

document.write(palabra_aleatorio);

alert ("Bienvenido al Ahorcado!! Disfruta del juego!");
var respuesta= prompt("Elige una letra!!");


while (isNaN(letra)==true) {
  respuesta= prompt("Error, has elegido un número, elige una letra por favor!")
} while (letra!=respuesta) {
  respuesta= prompt ("Lo siento, la letra no es correcta")
}
