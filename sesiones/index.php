<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
      $_SESSION['username'] = "Sergio";
      $_SESSION['id']=24;
    }
    echo "El usuario es ".$_SESSION['username'];
     ?>
  </body>
</html>
