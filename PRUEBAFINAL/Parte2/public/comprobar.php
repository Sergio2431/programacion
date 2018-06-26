<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Evento;

//Creamos un nevo objeto de para la insercion de datos contra la tabla evento
$evento = new Evento();

//insertamos un nuevo Registro
if (!isset($_POST["dni"]) || $_POST["dni"]==""){
    $correcto=false;
}elseif ((isset($_POST["dni"]))){
  $correcto=true;
  $evento->buscarAsistente($_POST["dni"]);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Entrada Evento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body style="padding:10px">
      <div class="w3-row">
        <div class="w3-col w3-container" style="width:30%"></div>
        <div class="w3-col w3-card-4" style="width:40%">
          <header class="w3-container w3-blue">
            <h2>Registrado</h2>
          </header>
         <div class="w3-container">
              <?php
                if ($correcto==true){
                  echo "<p>Nuevo registro realizado</p>";
                }else{
                  echo "<p>Falta algun campo por rellenar<p>";
                }
               ?>
              </div>
            <h2>Comprobacion</h2>
          </header>
          <div class="w3-container">
          <?
            $consulta="select * from registro where campo=".$campo;
            $resultado=mysql_query($consulta) or die (mysql_error());
            if (mysql_num_rows($resultado)>0)
            {
            print(REGISTRADO);
            } else {
            print(NO REGISTRADO);
            }
          ?>
          </div>
        </div>
        <div class="w3-col w3-container" style="width:30%"></div>
      </div>
  </body>
</html>
