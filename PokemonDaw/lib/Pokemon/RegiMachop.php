<?php
require_once "lib/PersonajePok.php"  /*Hacer refencia a la carpeta en la que hacer referencia*/
/**
*
*/

class JosepJala extends PersonajePok
{
  //Vida
  private $vida=150;
  private $ataqueFuria=1000;
  private $ataqueQueja=20;

  function_contruct()
  {

  }
  //Getters y setters de Vida
  public function setAtaqueFuria($valor){
    $this->ataqueFuria=$valor;
  }
  public function getAtaqueFuria($valor){
    return $this->vida;
  }
  //Atacar Furia
  public function atacar(){
    $random=rand(0,15);
    if ($random<4) {
      return $this->ataqueFuria;
    }else{
      return 0;
    }
  }
  //Atacar Queja
  public function atacar(){
    return $this->ataqueQueja;
  }
  //Restar Vida
  public function restarVida($valorRestar){
    $this->vida=$this->vida-$valorRestar;
  }
}
 ?>
