/*
* Autor: Sergio Ruiz BascuñAdivinacion
* Actividad: Adivinacion
*/

//Inicianilizacion de variables
var aleatorio = Math.round((Math.random()*100)+1);

 console.log(aleatorio)

 var respuesta= prompt("Elige un numero del 1 al 100");

    if (respuesta<aleatorio) {
      alert("TE QUEDASTE CORTO");
    }else if (respuesta>aleatorio) {
      alert("TE PASASTE");
    }else{
      alert("ACERTASTE");
    }
