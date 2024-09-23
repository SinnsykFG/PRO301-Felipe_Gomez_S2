<?php
class Comentario{
    private $id;
    private $usuarioId;
    private $articuloId;
    private $Contenido;
    private $fecha;

    //Constructor
    public function __construct($id, $usuarioId, $articuloId, $Contenido, $fecha) {
    $this ->id = $id;
    $this ->usuarioId = $usuarioId;
    $this ->articuloId = $articuloId;
    $this ->Contenido = $Contenido;
    $this ->fecha = $fecha;
    }

    //Getters
    public function getId(){
        return $this->id;
    }

    public function getUsuarioId(){
        return $this->usuarioId;
    }

    public function getArticuloId(){
        return $this->articuloId;
    }

    public function getContenido(){
        return $this->Contenido;
    }

    public function getFecha(){
        return $this->fecha;
    }



}

?>

