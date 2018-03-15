<?php
/**
 *
 */
class Personaje
{
  //Vida
  private $vida=100;
  //Resitencia
  private $resistencia=50;
  //Agilidad
  private $agilidad=10;

  function __construct()
  {

  }
  //Getters y setters de Vida
  public function setVida($vida){
    $this->vida=$vida;
  }
  public function getVida(){
    return $this->vida;
  }
  //Getters y setters de escudo
  public function setResistencia($resistencia){
    $this->resistencia=$resistencia;
  }
  public function getResistencia(){
    return $this->resistencia;
  }
  //Getters y setters de escudo
  public function setAgilidad($agilidad){
    $this->agilidad=$agilidad;
  }
  public function getAgilidad(){
    return $this->agilidad;
  }
  //Restar Vida
  public function restarVida($valorRestar){
    $this->vida=$this->vida-$valorRestar;
  }
}
