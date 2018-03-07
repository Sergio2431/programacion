<?php
/**
 *
 */
class PersonajeEne
{
  //Vida
  private $vida=100;
  //
  private $escudo=50;

  function __construct()
  {
    # code...
  }
  //Getters y setters de Vida
  public function setVida($valor){
    $this->vida=$valor;
  }
  public function getVida(){
    return $this->vida;
  }
  //Getters y setters de escudo
  public function setEscudo($escudo){
    $this->escudo=$escudo;
  }
  public function getEscudo(){
    return $this->escudo;
  }
  //Restar Vida
  public function restarVida($valorRestar){
    $this->vida=$this->vida-$valorRestar;
  }
}


 ?>
