<?php
//codigo php que conecta con la base de datos
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
    //comprobar que todos los campos se han llenado
    $llenado=(strlen($nombre)*strlen($apellidos)*strlen($DNI)*strlen($edad)*strlen($curso)*strlen($puntuacion)) or die("<center>
    <h3>No se han llenado todos los campos <br> <a href='insertarUsuario.php'>Volver a la página de registro</a></h3>
    </center>");
    //añadir la info a la base de datos
    $conector->query("INSERT INTO usuario VALUES ('$nombre','$apellidos','$edad','$curso','$puntuacion')") or die("<h3>Error de envio</h3>");
    echo '<h2>Registro completo</h2>';
  }
?>
<script type="text/javascript" id="identificador_js" src="comprobacion.js">
