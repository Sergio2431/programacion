<?php

namespace Daw\models;


class Equipo extends Db
{


    private $nombre="";
    private $participantes="";


    function __construct()
    {
        parent::__construct();
        parent::conectar();
    }


    public function listarEquipo(){
        $equipos="select nombre from equipos";
        $resultado = parent::consultar($equipos);
        foreach ($resultado as $fila) {
            echo "<option value='";
            echo $fila['nombre'];
            echo "'>";
            echo $fila['nombre'];
            echo "</option>";
        }
    }

    public function insertarEquipo($nombre,$participantes){
        $insertar="insert into equipo (nombre,participantes) values
    ('".$nombre."','".$participantes.")";
        $registro = parent::consultar($insertar);
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getParticipantes()
    {
        return $this->participantes;
    }
    public function setParticipantes($participantes)
    {
        $this->participantes = $participantes;
    }
    /*public function getApellidos()
    {
        return $this->apellidos;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
    */
}
