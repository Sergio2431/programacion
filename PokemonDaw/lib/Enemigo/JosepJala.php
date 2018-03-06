<?php
require_once "lib/PersonajeEne.php"  /*Hacer refencia a la carpeta en la que hacer referencia*/
/**
*
*/

class JosepJala extends PersonajeEne
{
  //Vida
  private $vida=5;

  function_contruct()
  {

  }
  //Getters y setters de Vida
  public function setVida($valor){
    $this->vida=$valor;
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
