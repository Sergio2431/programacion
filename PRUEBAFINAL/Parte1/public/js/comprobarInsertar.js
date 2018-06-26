function espaciosVacios() {

  var nombre = document.getElementById('nombre').value;
  var participantes = document.getElementById('participantes').value;

  if (nombre.length == 0) {
    alert("Rellene por favor todos los campos");
    return false;
  }

  if (participantes.length == 0) {
    alert("Rellene por favor todos los campos");
    return false;
  }

  if ((participantes > 5) || (participantes <1)) {
    alert("El numero de participantes debe estar entre 1 y 5");
    return false;
  }
}
