<?php
require_once "./lib/Personaje.php";   /*Hacer refencia a la carpeta en la que hacer referencia*/
/**
*
*/

class JosepJala extends Personaje
{
  //Fortalecer
  private $defensaChupa=50;

  //AtaqueJala
  private $ataqueJala=10;

  function __construct()
  {
    parent::setvida(50);
  }
  //Getters y setters de defensaChupa
  public function setdefensaChupa($valor){
    $this->vida=$valor;
  }
  public function getdefensaChupa($valor){
    return $this->vida;
  }
  //Getters y setters de defensaChupa
  public function setataqueJala($valor){
    $this->vida=$valor;
  }
  public function getataqueJala($valor){
    return $this->vida;
  }
  //atacar
  public function atacar(){
    return $this->ataqueJala;
  }
}
