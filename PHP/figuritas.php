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
      $i=1;
      $j=1;
      while ($i<=5) {
        echo "*"."<br>";
        $i++;
    }
    ?>
    </center>
    </div>
    <div class="figura2">
      <center>
      <h3>Figura 2: Sencilla</h3>
      <?php
        for ($i=1; $i <= 5; $i++) {
          for ($j=1; $j <= 5; $j++) {
            echo "*";
          }
          echo "<br>";
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
    <div class="figura4">
      <center>
      <h3>Figura 4: Normal</h3>
      <<?php
      for ($i=0; $i <= 2; $i++) {
        echo "*";
      for ($j=1; $j <= ($i*2); $j++) {
        echo "*";
      }
        echo "<br>";
      }
      for ($i=2; $i > 1; $i--) {
        echo "*";
        for ($j=2; $j >= 1; $j--) {
          echo "*";
      }
        echo "<br>";
      }
        echo "*"."<br>";
      ?>
    </div>
    <div class="figura5">
      <center>
      <h3>Figura 5: Normal</h3>
      <?php
      $aux=1;
      for ($i=0; $i<4;$i++) {
      for ($j=0; $j<$aux;$j++) {
      echo "*";
      }
      if($aux<7){
      $aux=$aux+2;
      }
      echo "<br>";
      }
       ?>
    </div>
  </body>
</html>
