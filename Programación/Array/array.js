//Inicialización
var poblaciones=[];
var resultadoUsuario="";

//Solicitar provincias
for (var i = 0; i < 2; i++) {
  resultadoUsuario=prompt("Dame una poblacion de Valencia");
  poblaciones.push(resultadoUsuario);
}

//Visualizar todos los elementos
for (var i = 0; i < poblaciones.length; i++) {
  console.log(poblaciones[i]);
}
