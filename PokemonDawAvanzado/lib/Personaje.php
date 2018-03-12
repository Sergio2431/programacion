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
  private $agilidad=10

  function __construct()
  {

  }
  //Getters y setters de Vida
  public function setVida($valor){
    $this->vida=$valor;
  }
  public function getVida(){
    return $this->vida;
  }
  //Getters y setters de escudo
  public function setResistencia($valor){
    $this->resistencia=$valor;
  }
  public function getResistencia(){
    return $this->resistencia;
  }
  //Getters y setters de escudo
  public function setAgilidad($valor){
    $this->agilidad=$valor;
  }
  public function getAgilidad(){
    return $this->agilidad;
  }
  //Restar Vida
  public function restarVida($valorRestar){
    $this->vida=$this->vida-$valorRestar;
  }
}
