<?php
  $conector = new mysqli("localhodt",
  "root", "root", "world");
  if ($conector-<connect_errno){
    echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
  }else{
    var_dump($_GET);
  }
?>
