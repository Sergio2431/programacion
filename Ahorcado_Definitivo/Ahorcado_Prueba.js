//alert("Bienvenido al Ahorcado");

var palabras=["HOLA","EXAMEM","MOVIL","ORDENADOR","CARGADOR" ];
var numAle=Math.round(Math.random()*(4-0));
var tamayoPalArray=palabras[numAle];
var letra="";
var plantilla= [];
console.log(palabras[numAle]);

letra = prompt ("Letra seleccionada");

while (isNaN(letra)==false) {
  letra = prompt ("Un numero no capullo");
}

for ( let i=0 ; i<tamayoPalArray.length; i++) {
  plantilla[i]="_";
}

var oportunidades= 2;
while (oportunidades>0) {
  for ( let i=0; i<tamayoPalArray.length; i++) {
    if (letra==tamayoPalArray.charAt(i)) {
    console.log("letra encontrada");
    plantilla[i]=letra;
    letra=true;
  }

var plantilla2=

  console.log();

}
