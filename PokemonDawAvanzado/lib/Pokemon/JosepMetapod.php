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
    parent::setvida(50);
    parent::setresistencia(10);
    parent::setagilidad(5);
  }
  //Getters y setters de defensaChupa
  public function setDefensaChupa($valor){
    $this->vida=$valor+$vida;
  }
  public function getDefensaChupa(){
    return $this->defensaChupa;
  }
  //Getters y setters de ataqueJala
  public function setAtaqueJala($valor){
    $this->vida=$valor;
  }
  public function getAtaqueJala(){
    return $this->ataqueJala;
  }
  //atacar
  public function atacar(){
    return $this->ataqueJala;
  }
}
