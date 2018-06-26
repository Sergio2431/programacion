<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Equipo;

$baseDatos=new Equipo();

if (isset($_POST["crear"])){
  $baseDatos->insertarEquipo($_POST['nombre'],$_POST['participantes']);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de Equipos</title>
    <link rel="stylesheet" href="css/formulario.css">
  </head>
  <body>
    <h1>BIENVENIDO!!</h1>
    <br><br>
      <!--formulario para elegir usuario existente-->
      <fielset>
        <legend>Selecciona un equipo.</legend>
        <form class="form" action="" method="post" name="form">
          <select class="" name="usuario">
            <option value="">--Selecciona uno--</option>;
            <?php
            $baseDatos->listarEquipo();
            ?>
          </select>
          <input type="submit" value="Empezar"></input>
        </form>
      </fielset>
    <br><br>
      <!--nuevo usuario-->
      <fielset>
        <legend>Crear nuevo Equipo.</legend>
        <button type="button" name="button" onclick="location.href='insertarUsuario.php'">Crear nuevo equipo</button>
      </fielset>
    <br><br>
  </body>
</html>
