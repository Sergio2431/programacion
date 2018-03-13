<?php
/**
*
*/
class Profesor
{
  private $nom_profesor="";
  private $apo_profesor="";

  function __construct()
  {

  }
  //Getters y setters de Nombre
  public function setNom_Profesor($nombre){
    $this->nombre=$nombre;
  }
  public function getNom_Profesor(){
    return $this->nombre;
  }
  //Getters y setters de Apodo
  public function setApo_Profesor($apodo){
    $this->apodo=$apodo;
  }
  public function getApo_Profesor(){
    return $this->apodo;
  }
}

?>
