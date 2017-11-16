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
alert ("Tienes 5 intentos para adivinar la letra")

//pedir letra al jugador
var letraIntro= prompt("Adivina la letra");
var intentos=5;
var cont=1;

//Bucle para no dejar introducir número
while (isNaN(letraIntro)==false) {
  letraIntro=prompt ("Has introducido un número, introduce una letra como se pide");
}

//bucle para mostrar por pantalla el fallo
while (intentos>cont && letra!=letraIntro){
  letraIntro=prompt("Te quedan "+eval("intentos-cont")+" intentos");
  cont++;
}

//Solución final
if (letra==letraIntro) alert ("Acertaste!!");
else alert ("No te quedan intentos");
