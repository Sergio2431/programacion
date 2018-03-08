<?php

require "./lib/Pokemon/RegiMachop.php";
require "./lib/Pokemon/JosepMetapod.php";
require "./lib/Pokemon/PabloOnix.php";
require "./lib/pokemon/SergioMewtwo.php";

<h2>RegiMachop</h2>
$RegiMachop= new RegiMachop();
echo "Caracteristicas de poder de RegiMachop:";
echo "RegiMachop tiene "$RegiMachop-> getVida()." puntos de vida";
echo "Su primer ataque Queja hace "$RegiMachop-> getAtaqueQueja()." puntos de daño";
echo "Su segundo ataque Furia hace "$RegiMachop-> getAtaqueFuria()." puntos de daño";

<h2>JosepMetapod</h2>
$JosepMetapod= new JosepMetapod();
echo "Caracteristicas de poder de JosepMetapod:";
echo "JosepMetapod tiene ". $JosepMetapod->getVida()." puntos de vida";
echo "Su primer ataque Chupa aumenta en  "$JosepMetapod-> getDefensaChupa()." sus puntos de daño";
echo "Su segundo ataque Jala hace "$JosepMetapod-> getAtaqueJala()." puntos de daño";

<h2>PabloOnix</h2>
$PabloOnix= new PabloOnix();
echo "Caracteristicas de poder de PabloOnix:";
echo "PabloOnix tiene "$PabloOnix-> getVida()." puntos de vida";
echo "Su primer ataque Programador hace "$PabloOnix-> getAtaqueProgramador()." puntos de daño";
echo "Su segundo ataque Repositorio hace "$PabloOnix-> getAtaqueRepositorio()." puntos de daño";

<h2>SergioMewtwo</h2>
$SergioMewtwo= new SergioMewtwo();
echo "Caracteristicas de poder de SergioMewtwo:";
echo "PabloOnix tiene "$SergioMewtwo-> getVida()." puntos de vida";
echo "Su primer ataque Muleta hace "$SergioMewtwo-> getAtaqueMuleta()." puntos de daño";
echo "Su segundo ataque PiernaLoca hace "$SergioMewtwo-> getAtaquePiernaLoca()." puntos de daño";

?>
