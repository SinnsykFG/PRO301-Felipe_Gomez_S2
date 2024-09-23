<?php
class Suscripcion{
    private $id;
    private $usuarioId;
    private $fechaInicio;
    private $fechaFin;
    private $estado;
    private $tipoPlan;

    //Constructor
    public function __construct($id, $usuarioId, $fechaInicio, $fechaFin, $estado, $tipoPlan){
        $this->id = $id;
        $this->usuarioId = $usuarioId;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
        $this->estado = $estado;
        $this->tipoPlan = $tipoPlan;
    }

    //Getters

    public function getId(){
        return $this->id;
    }

    public function getUsuarioId(){
        return $this->usuarioId;
    }

    public function getFechaInicio(){
        return $this->fechaInicio;
    }

    public function getFechaFin(){
        return $this->fechaFin;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getTipoPlan(){
        return $this->tipoPlan;
    }

    // Guardar la suscripcion en la base de datos (simulado)
    public function save(){
        echo "Suscripcion registrada con éxito.";
    }
}

?>