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

//Contador de errores donde elige el usuarios los errores    Atividad 1
var numIntro=prompt ("Elije el numero de intentos que quieras del 5 al 10");
while (isNaN(numIntro)==true) {
  numIntro=prompt("Error, has introducido una letra");
}
if (numIntro>=5 && numIntro<=10) {
  alert ("Tienes los siguientes intentos:" +numIntro);
}else{
  numIntro=prompt("Error has elegido un numero que no está entre 5 y 10. Elige uno entre el 5 y el 10");
}
console.log(numIntro);

alert("Intenta acertar la palabra. Suerte!");
alert("Si quieres rendirte solo tienes que escribir fin o si quieres una pista usa comodin");

//contador de errores
var intentos=numIntro;
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
var fin=false; //declaramos variable de la actividad 2
var comodin=10; //mayor que el numero de letras de la palabra mas larga
var letraAle=false;

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

//Usar la palabra fin para abandonar el Juego   Actividad 2
if (letra=="fin"){
  for (let i=0; i<=acertar.length-1; i++){
    palabra[i]=acertar.charAt(i);
    fin=true;
  }
}

//Usar la palabra comodin para recibir una pista   Actividad 3
if (letra=="comodin")
  do {
  comodin=Math.round(Math.random()*(acertar.length-1));
  console.log(comodin);
}while (palabra[comodin]!="_") {
  letra=palabraAcert[comodin];
  comp=true;
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

if (fin==true){
  alert ("Te has rendido. Más suerte la proxima vez");
}else{
  if (barrabaja==0 && intentos>cont){
  alert ("Enhorabuena!! Has completado la palabra!");
  }else{
   alert("Has perdido. Más suerte la próxima vez");
 }
}
