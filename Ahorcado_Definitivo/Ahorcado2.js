/*
*Autor: Sergio Ruiz
*Actividad: Ahorcado
*/

//Elegir palabra aleatoria
var numAle=Math.round(Math.random()*(4-0))
console.log(numAle);

var palabras= ["sergio","aprueba","con","buena","nota"];

var acertar=palabras[numAle];
console.log(acertar)

alert ("Bienvenido al Ahorcado");
alert ("Intenta acertar la palabra. Suerte");

//Contador de errores
var intentos=5;
var cont=0;

//palabra a palabraAcert
var palabraAcert=[];
for (let i=0; i<=acertar.length-1; i++) {
  palabraAcert[i]=acertar.charAt(i);
}

//de palabra a acertar
var palabra=[];
for (let i=0; i<=palabraAcert.length-1; i++) {
  palabra[i]="_";
}

var barrabaja=7 //numero que quiera diferente a 0
var comp=false;
var error="";

//contador de intentos
while (intentos>cont && barrabaja!=0){
  //pedimos la letra y comprovamos
  var letra=prompt("Te quedan "+ eval("intentos-cont")+" intentos");
  cont;
  while (isNaN(letra)==false) {
    letra=prompt("No has introducido una letra. Introduce una letra");
  }


//poner la letra en la palabra a acertar
for (let i=0; i<=palabra.length-1; i++){
  if (letra == palabraAcert[i]){
    palabra[i]=letra;
    comp=true;
  }
}

//comprobar si la letra aparece por pantalla
if (comp==true){
  console.log(letra);
  alert("Felicidades has encontrado una letra")
}else{
  error=error+letra;
  console.log(error);
  alert("La letra no está en la palabra")
  cont++;
 }
comp=false;

//mostrar array
var j="";
for (let i=0; i<=acertar.length-1; i++) {
  j=j+palabra[i];
}
console.log(j);

//comprobar si la letra es correcta
barrabaja=0
preguntar=false
for (let i=0; i<=acertar.length-1; i++) {
  if (palabra[i]=="_") barrabaja=barrabaja+1;
  }
}

if (barrabaja==0 && intentos>cont){
  alert("Felicidades. Has ganado!!")
}else{
  alert("Has perdido. Más suerte la próxima vez")
}
