<?php
$conector = new mysqli("localhost","root","","programacion1");
if ($conector->connect_errno){
  echo "Fallo al conectar a MySQL: " . $conector->connect_error;
}else {
  //almacenar en variables los datos recogidos
  $nombre=$_POST['Nombre'];
  $apellidos=$_POST['Apellidos'];
  $DNI=$_POST['DNI'];
  $edad=$_POST['Edad'];
  $curso=$_POST['Curso'];
  $puntuacion=$_POST['Puntuacion'];
  //comprobar que todos los campos de han llenado
  $completo=(strlen($nombre)*strlen($apellidos)*strlen($DNI)*strlen($edad)*strlen($curso)*strlen($puntuacion)) or die("<center>
  <h3>No se han llenado todos los campos <br> <a href='insertarUsuario.php'>Volver a la página de registro</a></h3>
  </center>");
  //añadir la info a la base de datos
  $conector->query("INSERT INTO usuario VALUES ('$nombre','$apellidos','$DNI','$edad','$curso','$puntuacion')");
  echo '<h2>Registro completo</h2>';
}
header('Location: listadoUsuario.php');
?>
