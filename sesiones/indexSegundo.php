<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    echo "EL número de veces visitado es: ".$_SESSION['DAW'];
    ?>
  </body>
</html>
