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

//contador
var intentos=5;
var error=1;

//Busqueda de la palabra
var palabra=[];
for (let i = 0; i <=palabra.length; i++) {
  palabra[i]="_";
}
var pregunta=true;
var error=false;

while (intentos>cont && preguntar==true) {
  var letra==prompt ("Elige una letra");
  while (isNaN(letra)==false) {
    letra=prompt("Error, elige una letra")
  }

  //Añadimos la letra encontrada
  for (var i = 0; i <= palabra.length; i++) {
  if (letra==adivinar.charAt(i)){
      palabra[i]==letra;
      error=true;
  }
}
