/*
*Autor: Sergio Ruiz Bascuñana
*Actuividad: Ahorcado
*/

//Buscamos una letra aleatoria
var numA= Math.round(Math.random()* (122-97)) +97;
console.log(numA);

//conertir letra aleatoria
var letra="";
letra=String.fromCharCode(numA);
console.log(letra);

//Bienvenida al Juego
alert ("Bienvenido al Ahorcado!!")

//pedir letra al jugador
var letraIntro= prompt("Adivina la letra");

//Bucle
while (isNaN(letraIntro)==false) {
  letraIntro=prompt ("Has introducido un número, introduce una letra como se pide, Josep");
}
if (letra==letraIntro) {
  alert ("Acertaste!!");
}else {
  alert ("La letra no es correcta, elige otra letra nueva");
}
