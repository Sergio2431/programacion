/*
Autor: Sergio Ruiz Bascuñana
Actividad: Ahorcado 4.0
*/

var palabras= ["amigos", "aprobado", "vida", "social", "ordenador", "raton"]

var numAle= Math.round(Math.random()*(5-0))
console.log(numAle);

var acertar=palabras[numAle];
console.log(acertar);

var barrabaja=8;
var comp=false;
var fallo="";
var entrada=letra;

//contador de fallos
var intentos=5;
var cont=0;
if (intentos>cont && barrabaja!=0) {
  letra=entrada.value;
  entrada.value="";
}

//comprobar si la letra introducida esta en la palabra
function comprobar(){
  if(intentos>cont && barrabaja!=0)
  //pedir letra y comprobamos si esta
  
}
