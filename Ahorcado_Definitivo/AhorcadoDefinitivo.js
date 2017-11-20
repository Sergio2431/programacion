/*
*Autor: Sergio Ruiz
*Actividad: Ahorcado
*/

//Buscamos que elija una palabra aleatoria
var numAle=Math.round(Math.random()*(4-0));
console.log(numAle);

var palabras=["comida","motos","amigo","aprobado","familia"]

var acertar=palabras[numAle];
console.log(acertar);

alert("Bienvenido al Ahorcado!!");
alert("Intenta acertar la palabra. Suerte!");

//contador de errores
var intentos=5;
var cont=0;

//de Palabra a PalabreAcert
var palabraAcert=[];
for (let i=0; i<=acertar.length-1;i++){
  palabraAcert[i]=acertar.charAt(i);
}

//De palabra a acertar
var palabra=[];
for (let i=0; i<=palabraAcert.length-1; i++){
  palabra[i]="_";
}
var barrabaja=5; //numero diferente de 0
var comp=false;
var fallo= "";

//Contador de errores
while (intentos>cont && barrabaja!=0) {
//pedimos la letra y comprovamos si está
  var letra=prompt("Elige una letra. Te quedan "+eval("intentos-cont")+" intentos");
  cont;
  while (isNaN(letra)==false) {
    letra=prompt("Error, introduce solo una letra en minúscula");
  }


//Poner letra acertada en la plantilla
for (let i=0; i<=palabra.length-1; i++) {
  if (letra == palabraAcert[i]) {
    palabra[i]=letra;
    comp=true;
  }
}

//Comprobar si la letra está en la plantilla
if (comp==true){
  console.log(letra);
  alert("Has encontrado la letra!");
}else{
  fallo=fallo+letra;
  console.log(fallo);
  alert ("La letra no está en la palabra, sigue provando")
  cont++;
}
comp=false

//mostrar array por panatlla
var j="";
for (let i=0; i<=acertar.length-1; i++){
  j=j+palabra[i];
  //concole.log(palabra[i])
}
console.log(j);

//comprobar si ha acertado la letra
barrabaja=0;
preguntar=false;
for (let i=0; i<=acertar.length-1; i++){
  if(palabra[i]=="_") barrabaja=barrabaja+1;
  }
}

if (barrabaja==0 && intentos>cont){
  alert ("Enhorabuena!! Has completado la palabra!");
}else{
   alert("Has perdido. Más suerte la próxima vez");
}
