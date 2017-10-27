/*
*Autor: Sergio Ruiz Bascuñana
*Actividad: Ahorcado
*/

//Inicianilizacion de variables

var num;

num=prompt("INTRODUCE UN NUMERO DEL  AL 100");

console.log(num);

while (isNaN(num)==true || num<1 || num>100) {

num=prompt ("ELIGE UN NUMERO DEL 1 AL 100");

}

//y=parseInt(y)

for(var x= 1; x <= 10; x++) {
  r=num*x;
  document.write("<br>"+num+"x"+x+"="+r);
}
