<?php
require_once "../model/Db.php";
/**
 *
 */
class Table
{
  //Generar el conector a la base de datos
  private $db;
  private $conector;

  function __construct($server,$user,$pass,$db)
  {
    $this->db=new Db($server,$user,$pass,$db);
    $this->conector=$this->db->conectar();
  }

  public function findAll($tabla){}
    $consulta="SELECT * FROM $tabla";
    $resultado=$this->conector->query($consulta);
    return=$resultado;
}

  public function ($query){
    $resultado=$this->conector->query($consulta);
    return $resultado;
  }

 ?>
