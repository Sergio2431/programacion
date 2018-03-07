<?php
require_once "lib/Personajepok.php"  /*Hacer refencia a la carpeta en la que hacer referencia*/
/**
*
*/

class JosepJala extends PersonajePok
{
  //Vida
  private $vida=50;
  private $ataqueJala=10;

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

  //atacar
  public function atacar(){
    return $this->ataqueJala;
  }
  //Restar Vida
  public function restarVida($valorRestar){
    $this->vida=$this->vida-$valorRestar;
  }
}
 ?>
