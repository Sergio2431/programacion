<?php

$conector = new mysqli("localhost", "root", "", "programacion1");
if ($conector->connect_errno) {
  echo "Fallo al conectar a MySQL: " . $conector->connect_error;
}else{
  $usuario_update=$_POST['seleccionar_usuario'];
  $nombre=$_POST['Nombre'];
  $apellidos=$_POST['Apellidos'];
  $edad=$_POST['Edad'];
  $curso=$_POST['Curso'];
  $puntuacion=$_POST['Puntuacion'];

  //actualizar la información del Usuario
  echo "usuario_update ".$usuario_update."nombre ".$nombre. " apellidos ".$apellidos. " edad ".$edad. " curso ".$curso. " puntuacion ".$puntuacion;

  $conector->query("UPDATE usuario SET nombre='$nombre', apellidos='$apellidos', edad='$edad', curso='$curso', puntuacion='$puntuacion' WHERE nombre='$usuario_update'");

  }
  header('Location: actualizarUsuario.php');
 ?>
