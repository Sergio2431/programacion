<?php
require_once "lib/Personaje.php"  /*Hacer refencia a la carpeta en la que hacer referencia*/
/**
*
*/

class RegiMachop extends Personaje
{

  //Ataques
  private $ataqueFuria=1000;
  private $ataqueQueja=20;

  function __construct()
  {
    //Vida
    parent::setVida(150);
  }
  //Getters y setters de AtaqueFuria
  public function setAtaqueFuria($valor){
    $this->ataqueFuria=$valor;
  }
  public function getAtaqueFuria(){
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
}
