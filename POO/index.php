<?php
use Lib\Universidad\Alumno as Alumno;
use Lib\Universidad\Profesor as P;
include ("lib/Alumno.php");
include ("lib/Profesor.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Probando namespace</title>
  </head>
  <body>
    <?php
    //Nuevo Alumno
    $alumno1=new Alumno();
    $alumno1->setNombre("Salva"); //Para cambiar el nombre de alumno1
    $alumno1->setApodo("El Mohicano"); //Para cambiar el apodo de alumno1
     ?>
     <h1>Alumno de DAW</h1>
     <p>El nombre del alumno es: <b><?=$alumno1->getNombre()?></b></p>
     <p>El apodo del alumno es: <b><?=$alumno1->getApodo()?></b></p>

     <?php
     //Nuevo Profesor
     $profesor=new Profesor();
     $profesor->setNom_Profesor("Paco"); //Para cambiar el nombre de alumno1
     $profesor->setApo_Profesor("El Hombreton"); //Para cambiar el apodo de alumno1
      ?>
      <h1>Alumno de DAW</h1>
      <p>El nombre del profeosor es: <b><?=$alumno1->getNom_Profesor()?></b></p>
      <p>El apodo del profesor es: <b><?=$alumno1->getApo_Profesor()?></b></p>
  </body>
</html>
