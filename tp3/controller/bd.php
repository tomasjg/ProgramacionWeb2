<?php

define('HOST','localhost'); 
define('USER','root');
define('PASS','');
define('DBNAME','pokemons-gomez-tomas');


class BaseDeDatos
{
    protected $conexion;
    protected $db;

    public function conectar()
    {
        $this->conexion = mysqli_connect(HOST, USER, PASS, DBNAME);
        if (!$this->conexion ) DIE("Error al conectar a la base de datos: " . mysql_error());

        return $this->conexion;

    }

    public function desconectar()
    {
        if ($this->conexion) {
            mysqli_close($this->conexion);
        }

    }


}