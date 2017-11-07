//Funcion

function comprobar(){

  //Comprobar que el usuario ha introducido un número
  numusuario= parseInt(cajausuario.value);
  if (isNaN(numUsuario)){
    alert= "No has introducico un número";
  }else{
    if (numUsuario==numAleatorio){
      alert="Acertaste!";
    }else{
      alert="Sige probando";
      numIntentos++;
      alert: numIntentos;
    }
  }
}

//Numwero aleatorio
var numAleatorio=Math.round(Math.random()*(10-1)+1);
console.log(numAleatorio);
//Colocamos las variables
var cajaUsuario=document.getElementById("cajaUsuario");
var numUsuario=0;
var cajaIntentos=document.getElementById("cajaIntentos");
var numIntentos=0;
var cajaMensajes=document.getElementById("msj");
