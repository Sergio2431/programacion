<?php
require_once "../Personaje.php";   /*Hacer refencia a la carpeta en la que hacer referencia*/
/**
*
*/

class JosepMetapod extends Personaje
{
  //Fortalecer
  private $defensaChupa=50;

  //AtaqueJala
  private $ataqueJala=10;

  function __construct()
  {
    parent::setVida(50);
    parent::setResistencia(10);
    parent::setAgilidad(5);
  }
  //Getters y setters de defensaChupa
  public function setDefensaChupa($defensaChupa){
    $this->vida=$defensaChupa+$vida;
  }
  public function getDefensaChupa(){
    return $this->defensaChupa;
  }
  //Getters y setters de ataqueJala
  public function setAtaqueJala($ataqueJala){
    $this->vida=$vida-$ataqueJala;
  }
  public function getAtaqueJala(){
    return $this->ataqueJala;
  }
  //atacar
  public function atacar(){
    return $this->ataqueJala;
  }
  function mostrarVidaJosep(){
    return parent::getVida();
  }
  function mostrarResistenciaJosep(){
    return parent::getResistencia();
  }
  function mostrarAgilidadJosep(){
    return parent::getAgilidad();
  }
  function mostrarAtaqueJala(){
    return $this->ataqueJala;
  }
  function mostrarDefensaChupa(){
    return $this->defensaChupa;
  }
}
