<?php
require_once "../Personaje.php";  /*Hacer refencia a la carpeta en la que hacer referencia*/
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
    parent::setresistencia(10);
    parent::setagilidad(20);
  }
  //Getters y setters de AtaqueFuria
  public function setAtaqueFuria($valor){
    $this->ataqueFuria=$valor;
  }
  public function getAtaqueFuria(){
    return $this->ataqueFuria;
  }
  //Atacar Furia
  public function atacarFuria(){
    $random=rand(0,15);
    if ($random<4) {
      return $this->ataqueFuria;
    }else{
      return 0;
    }
  }
  //Getters y setters de AtaqueQueja
  public function setAtaqueQueja($valor){
    $this->ataqueFuria=$valor;
  }
  public function getAtaqueQueja(){
    return $this->ataqueQueja;
}
  //Atacar Queja
  public function atacar(){
    return $this->ataqueQueja;
  }
  function mostrarVidaRegi(){
    return parent::getVida();
  }
  function mostrarResistenciaRegi(){
    return parent::getResistencia();
  }
  function mostrarAgilidadRegi(){
    return parent::getAgilidad();
  }
  function mostrarAtaqueFuria(){
    return $this->ataqueFuria;
  }
  function mostrarAtaqueQueja(){
    return $this->ataqueQueja;
  }
}
