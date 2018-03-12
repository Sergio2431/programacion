<?php
require_once "./lib/Personaje.php";  /*Hacer refencia a la carpeta en la que hacer referencia*/
/**
*
*/

class PabloOnix extends Personaje
{

  //Ataques
  private $ataqueProgramador=130;
  private $ataqueRepositorio=10000;

  function __construct()
  {
    //Vida
    parent::setVida(250);
    parent::setresistencia(20);
    parent::setagilidad(2S);
  }
  //Getters y setters de AtaqueRepositorio
  public function setAtaqueRepositorio($valor){
    $this->ataqueRepositorio=$valor;
  }
  public function getAtaqueRepositorio(){
    return $this->ataqueRepositorio;
  }
  //Atacar Repositorio
  public function atacarRepositorio(){
    $random=rand(0,15);
    if ($random<2) {
      return $this->ataqueRepositorio;
    }else{
      return 10;
    }
  }
  //Getters y setters de ataqueProgramador
  public function setAtaqueProgramador($valor){
    $this->ataqueProgramador=$valor;
  }
  public function getAtaqueProgramador(){
    return $this->ataqueProgramador;
}
  //Atacar Programador
  public function atacar(){
    return $this->ataqueProgramador;
  }
}
