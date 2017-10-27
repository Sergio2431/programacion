//Definiciónde un frase
var parrafoLargo= "Este es un ejemplo \
de un parrafo super largo \
con mucho texto";

console.log(parrafoLargo);
var parrafoTwitter=parrafoLargo.trim();
//Cabe en Twitter?
if (parrafoLargo.lenght<140) {
  console.log(parrafoTwitter);
  console.log("CABE EN TWITTER!!");
}

var parrafoTwitter= parrafoLargo

//Sacar la 3º letra de parrafoLargo de twitter
console.log(parrafoTwitter.chaAt(2));



//Darle la b¡vuekta a la frase
var parrafoTwitterVuelta="";
for (var i = parrafoTwitter.lenght-1; i >=0;i--){
  parrafoTwitterVuelta=parrafoTwitterVuelta+parrafoTwitter.charAt(i);
}
console.log(parrafoTwitterVuelta);


var frase= "Sergio_Guapo"
var frase reves=""
