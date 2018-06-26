<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Equipo;

$baseDatos=new Equipo();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/formulario.css">
  </head>
  <body>
    <h1>CREAR EQUIPO</h1>
    <form method="post" action="listarEquipo.php" onsubmit="espaciosVacios()">
      <fieldset class="caja">
        <p>Nombre <b>*</b><br>
          <input type="text" name="nombre" id="nombre" value="" placeholder="Introduce el nombre" required></p>
        <p>Participantes <br>
          <input type="text" name="participantes" id="participantes" placeholder="Introduce los participantes"></p>
      </fieldset>
      <input type="submit" name="crear" value="Crear equipo">
    </form>
    <button type="button" name="button" onclick="location.href='listarEquipo.php'">Volver</button>
    <script type="text/javascript" src="js/comprobarInsertar.js" charset="utf-8"></script>
  </body>
</html>
