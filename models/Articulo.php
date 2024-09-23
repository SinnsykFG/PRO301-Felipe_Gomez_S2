<?php
class Articulo{
    private $id;
    private $titulo;
    private $contenido;
    private $autorId;
    private $categoriaId;
    private $fechaPublicacion;
    private $views;
    private $imagen;


    //Constructor
    public function __construct($id, $titulo, $contenido, $autorId, $categoriaId, $fechaPublicacion, $views, $imagen){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->autorId = $autorId;
        $this->categoriaId = $categoriaId;
        $this->fechaPublicacion = $fechaPublicacion;
        $this->views = $views;
        $this->imagen = $imagen;
    }

    //Getters
    public function getId(){
        return $this->id;

    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getContenido(){
        return $this->contenido;
    }

    public function getAutorId(){
        return $this->autorId;
    }

    public function getCategoriaId(){
        return $this->categoriaId;
    }

    public function getFechaPublicacion(){
        return $this->fechaPublicacion;
    }

    public function incrementViews(){
        $this->views++;
    }

    // Guardar el articulo en la base de datos (simulado)
    public function save(){
        echo "Articulo registrado con éxito.";
    }
}

?>