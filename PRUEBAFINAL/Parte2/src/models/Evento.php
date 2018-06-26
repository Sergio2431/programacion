<?php
namespace Daw\models;
/**
 * Plantilla vacia de Db
 */
class evento extends Db
{

  function __construct()
  {
    parent::__construct();
  }

  //Buscamos a un asistente
  public function buscarAsistente($dni){
    $consulta="INSERT INTO asistente (dni) ";
    $consulta=$consulta."VALUES ('$dni')";
    return parent::consulta($consulta);
  }

}

?>
