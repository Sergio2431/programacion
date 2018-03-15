<?php
require_once "../Personaje.php";  /*Hacer refencia a la carpeta en la que hacer referencia*/
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
    parent::setresistencia(5);
    parent::setagilidad(15);
  }
  //Getters y setters de AtaqueMuleta
  public function setAtaqueMuleta($valor){
    $this->ataqueMuleta=$valor;
  }
  public function getAtaqueMuleta(){
    return $this->ataqueMuleta;
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
    return $this->ataquePiernaLoca;
  }
  //Atacar PiernaLoca
  public function atacarPiernaLoca(){
    return $this->ataquePiernaLoca;
  }
  function mostrarVidaSergio(){
    return parent::getVida();
  }
  function mostrarResistenciaSergio(){
    return parent::getResistencia();
  }
  function mostrarAgilidadSergio(){
    return parent::getAgilidad();
  }
  function mostrarAtaqueMuleta(){
    return $this->ataqueMuleta;
  }
  function mostrarAtaquePiernaLoca(){
    return $this->ataquePiernaLoca;
  }
}
