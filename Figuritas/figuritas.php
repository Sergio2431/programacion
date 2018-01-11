<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Figuritas</title>
  </head>
  <body>
    <div class="figura1">
      <center>
      <h3>Figura 1: Muy muy sencilla</h3>
    <?php
      $x=1;
      $y=1;
      while ($x<=5) {
        echo "*";
      }
      echo "<br>"
    }
  $x++;
}
    ?>
    </center>
    </div>
    <div class="figura2">
      <center>
      <h3>Figura 2: Sencilla</h3>
      <?php
        for ($i=1; $i <= 7; $i++) {
          for ($j=1; $j <= $i; $j++) {
            echo "*";
          }
          echo "<br>"
        }
       ?>
     </center>
    </div>
    <div class="figura3">
      <center>
      <h3>Figura 3: Sencilla</h3>
      <?php
        for ($i=1; $i <= 7; $i++) {
          for ($j=0; $j <= $i; $j++) {
            echo "*";
          }
          echo "<br>";
        }
       ?>
     </center>
    </div>
  </body>
</html>
