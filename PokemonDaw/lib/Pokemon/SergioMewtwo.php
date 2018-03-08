<?php
require_once "./lib/Personaje.php";  /*Hacer refencia a la carpeta en la que hacer referencia*/
/**
*
*/

class SergioMewtwo extends Personaje
{

  //Ataques
  private $ataqueMuleta=125;
  private $ataquePiernaLoca=250;

  function __construct()
  {
    //Vida
    parent::setVida(450);
  }
  //Getters y setters de AtaqueMuleta
  public function setAtaqueMuleta($valor){
    $this->ataqueMuleta=$valor;
  }
  public function getAtaqueMuleta(){
    return $this->vida;
  }
  //Atacar Muleta
  public function atacarMuleta(){
    return $this->ataqueMuleta;
  }
  //Getters y setters de AtaquePiernaLoca
  public function setAtaquePiernaLoca($valor){
    $this->ataquePiernaLoca=$valor;
  }
  public function getAtaquePiernaLoca(){
    return $this->vida;
  }
  //Atacar PiernaLoca
  public function atacarPiernaLoca(){
    return $this->ataquePiernaLoca;
  }
}
