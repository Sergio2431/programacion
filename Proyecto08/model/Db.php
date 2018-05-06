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
  private $db="programacion1";

  private $usuario="";
  private $nombre="";
  private $apellidos="";
  private $DNI_"";
  private $edad="";
  private $curso="";

  //Propiedad conector
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

  public function leerDatos(){
    $consulta="select nombre,apellidos,DNI,edad,curso from DNI where DNI='".$_POST['DNI']."'";
    //echo $consulta;
    $consultaUsuario = $this->conector->query($consulta);
    $this->usuario=$_POST['DNI'];

  foreach ($consultaUsuario as $fila) {
    $this->nombre=$fila['nombre'];
    $this->apellidos=$fila['apellidos'];
    $this->edad=$fila['edad'];
    $this->curso=$fila['curso'];
  }
}

 ?>
