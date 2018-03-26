<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    $_SESSION=[];
    session_destroy();
    ?>
    <br><a href="indexSegundo.php">Otra página</a>
  </body>
</html>
