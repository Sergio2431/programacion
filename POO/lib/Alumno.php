<?php
/**
*
*/
class Alumno
{
  private $nombre="";
  private $apodo="";

  function __construct()
  {

  }
  //Getters y setters de Nombre
  public function setNombre($nombre){
    $this->nombre=$nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  //Getters y setters de Apodo
  public function setApodo($apodo){
    $this->apodo=$apodo;
  }
  public function getApodo(){
    return $this->apodo;
  }
}

?>
