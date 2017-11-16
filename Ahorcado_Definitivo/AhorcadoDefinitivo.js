/*
*Autor: Sergio Ruiz
*Actividad: Ahorcado
*/

//Buscamos que elija una palabra aleatoria
var numAle=Math.round(Math.random()*(4-0));
console.log(numAle);

var palabras=["comida","motos","amigo","pecado","carnal"]

var acertar=palabras[numAle];
console.log(acertar);

alert("Bienvenido al Ahorcado!!")
alert("Tienes 5 intentos para completar y acertar la palabra. Suerte!")

//contador de errores
var intentos=5
var cont=0

//Introduccion de una letra
var letra=prompt("Elige una letra. Te quedan "+eval("intentos-cont")+" intentos");
while (isNaN(letra)==false) {
  letra=prompt("Error, introduce solo una letra en minúscula");
}

//Array de la palabra
var palabra=[];
for (let i = 0; i < palabra.acertar; i++) {
  array[i]
}
