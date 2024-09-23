<?php
class Categoria{
    private $id;
    private $nombre;
    private $descripcion;

    //Constructor
    public function __construct($id, $nombre, $descripcion){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    //Getters
    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }


}

?>