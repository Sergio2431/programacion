/*
Autor: Sergio Ruiz Bascuñana
Actividad: Ahorcado 4.0
*/

var palabras= ["Josep", "tiene", "rabo", "dedos", "centimetros", "empalmado"]

var numAle= Math.round(Math.random()*(5-0))
console.log(numAle);

var acertar=palabras[numAle];
console.log(acertar);

alert("Bienvendo al Ahorcado! Disfruta del juego!");
alert("Intenta acertar la palabra con 5 intentos");

var barrabaja=8;
var comp=false;
var fallo="";

//contador de fallos
var intentos=5;
var cont=0;

//contador de errores
while (intentos>cont && barrabaja!=0) {
//pedimos la letra al usuario y comprovamos si está
  var letra=prompt("Elige una letra. Te quedan " +eval("intentos-cont")+" intentos");
  cont;
  while (isNaN(letra)==false) {
    letra=prompt("Error, introduce una letra en minuscula gilipollas");
  }
}
