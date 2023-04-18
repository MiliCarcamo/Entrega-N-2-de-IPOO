<?php

class Pasajero{
    //Atributos
    private $nombre;
    private $apellido;
    private $nroDocumento;
    private $nroTelefono;

    //Metodo constructor
    public function __construct($nombre, $apellido, $nroDocumento, $nroTelefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nroDocumento = $nroDocumento;
        $this->nroTelefono = $nroTelefono;
    }

    //Metodos de acceso

    // GET
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getNroDocumento(){
        return $this-> nroDocumento;
    }

    public function getNroTelefono(){
        $this->nroTelefono;
    }

    // SET
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setNroDocumento($nroDocumento){
        $this->nroDocumento = $nroDocumento;
    }

    public function setNroTelefono($nroTelefono){
        $this->nroTelefono = $nroTelefono;
    }

    public function __toString()
    {
        $cadena = '';
        $cadena = "Nombre: ". $this->getNombre().
        "Apellido: ". $this->getApellido(). 
        "Numero de documento: ". $this->getNroDocumento().
        "Numero de telefono: ". $this->getNroTelefono();
        return $cadena;
    }

}


?>