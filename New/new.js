//Inicialización de fechas
var fechaHoy=new Date();
var fechaCumpleSergio=new Date(2018,9,31);
var fechaCumpleSergio=new Date(2018,9,31,3);


//Muestro el dia de hoy
console.log(fechaHoy);
console.log(fechaCumpleSergio);
console.log("Sergio cumple el dia:"+fechaCumpleSergio.getDate());
console.log("Sergio cumple el dia:"+fechaCumpleSergio.getDay());

//Dia de la semana
console.log("Dia de la semana"+fechaCumpleSergio.getDay());
switch (fechaCumpleSergio.getDay()) {
  case 0:
    console.log("Dia de la semana: Domingo");
    break;
  case 1:
    console.log("Dia de la semana: Lunes");
    break;
  case 2:
    console.log("Dia de la semana: Martes");
    break;
  case 3:
    console.log("Dia de la semana: Miercoles");
    break;
  case 4:
    console.log("Dia de la semana: Jueves");
    break;
  case 5:
    console.log("Dia de la semana: Vienes");
    break;
  case 6:
    console.log("Dia de la semana: Sabado");
    break;
}
fechaCumpleSergio.setFullYear(2019,9,31)
