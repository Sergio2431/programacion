<?php
/**
 *
 */
class Db
{
  //Propiedades de conexión
  private $server="";
  private $user="";
  private $pass="";
  private $db="";

  //Propiedad conecto
  private $conector;

  function __construct($server,$user,$pass,$db)
  {
    $this->server=$server;
    $this->user=$user;
    $this->pass=$pass;
    $this->db=$db;
  }

  function conectar(){
    $conectorTmp = new mysqli($this->server,$this->user,$this->pass,$this->db);
    if ($conectorTmp->connect_errno) {
      $this->conector=false;
    }else{
      $this->conector=$conectorTmp;
    }
  }
}


 ?>
