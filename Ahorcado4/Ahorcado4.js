/*
Autor: Sergio Ruiz Bascuñana
Actividad: Ahorcado 4.0
*/

var palabras= ["amigos", "aprobado", "vida", "social", "ordenador", "raton"]

var numAle= Math.round(Math.random()*(5-0))
console.log(numAle);

var acertar=palabras[numAle];
console.log(acertar);

function Comprobar(){
  if(intentos>cont && barrabaja!=0){
  letra=entrada.value;
  entrada.value="";

  while (isNaN(letra)==false) {
    letra=prompt("Introduce una letra");
    alert("Error, introduce una letra")
  }
  }
}

//poner letra en la plantilla
for (var i = 0; i <palabras.length-1; i++) {
  if (letra == palabraAcertar[i]) {
    palabras[i]=letra;
    comp=true;
  }
}

//comprobar si la letra esta en la palabra
if (comp==true) {
  console.log(letra);
}else {
  fallo=fallo+letra;
  fallos.textContent=fallo;
  cont++;

  intentado.tectContent="Llevas "+cont+" intentos.";
}
comp=false;

//array
var j="";
for (let i=0; i<=adivinar.length-1; i++){
  j=j+palabras[i];
}
comprobante.value=j;

//comprobar la letra introducida
barrabaja=0;
preguntsr=false;
for(let i=0; i<=adivinar.length-1; i++){
  if(palabra[i]=="_") barrabaja=barrabaja+1;
  }else {
  if (barrabaja==0) resultado.textContent="ENHORABUENA!!!";
  else resultado.textContent="Mejor suerte la próxima vez";
 }
}
