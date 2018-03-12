<?php

require "./lib/Pokemon/RegiMachop.php";
require "./lib/Pokemon/JosepMetapod.php";
require "./lib/Pokemon/PabloOnix.php";
require "./lib/pokemon/SergioMewtwo.php";

$RegiMachop= new RegiMachop();
echo "Caracteristicas de poder de RegiMachop:<br>";
echo "RegiMachop tiene ".$RegiMachop-> getVida()." puntos de vida<br>";
echo "Su primer ataque Queja hace ".$RegiMachop-> getAtaqueQueja()." puntos de daño<br>";
echo "Su segundo ataque Furia hace ".$RegiMachop-> getAtaqueFuria()." puntos de daño<br><br>";

$JosepMetapod= new JosepMetapod();
echo "Caracteristicas de poder de JosepMetapod:<br>";
echo "JosepMetapod tiene ".$JosepMetapod->getVida()." puntos de vida<br>";
echo "Su primer ataque Chupa aumenta en  ".$JosepMetapod-> getDefensaChupa()." sus puntos de daño<br>";
echo "Su segundo ataque Jala hace ".$JosepMetapod-> getAtaqueJala()." puntos de daño<br><br>";

$PabloOnix= new PabloOnix();
echo "Caracteristicas de poder de PabloOnix:<br>";
echo "PabloOnix tiene ".$PabloOnix-> getVida()." puntos de vida<br>";
echo "Su primer ataque Programador hace ".$PabloOnix-> getAtaqueProgramador()." puntos de daño<br>";
echo "Su segundo ataque Repositorio hace ".$PabloOnix-> getAtaqueRepositorio()." puntos de daño<br><br>";

$SergioMewtwo= new SergioMewtwo();
echo "Caracteristicas de poder de SergioMewtwo:<br>";
echo "PabloOnix tiene ".$SergioMewtwo-> getVida()." puntos de vida<br>";
echo "Su primer ataque Muleta hace ".$SergioMewtwo-> getAtaqueMuleta()." puntos de daño<br>";
echo "Su segundo ataque PiernaLoca hace ".$SergioMewtwo-> getAtaquePiernaLoca()." puntos de daño<br>";

?>
