<?php
require_once "lib/Personaje.php"  /*Hacer refencia a la carpeta en la que hacer referencia*/
/**
*
*/

class Superman extends Personaje
{
  //Vida
  private $vida=100;

  function __construct()
  {

  }
  //Getters y setters de Vida
  public function setVida($valor){
    $this->vida=$valor;
    return $this->vida;
  }
  public function getVida($valor){
    return $this->vida;
  }
  //Restar Vida
  public function restarVida($valorRestar){
    $this->vida=$this->vida-$valorRestar;
  }
}
 ?>
