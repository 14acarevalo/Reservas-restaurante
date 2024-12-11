<?php

class Reservas {

    //Creamos atributos privados para la reserva
    private $idReservas;
    private $nombre_cliente;
    private $apellidos_cliente;
    private $telefono_cliente;
    private $fecha;
    private $hora;
    private $personas;

    //Creamos nuestro constructor con todos los atributos que vamos a necesitar para la clase reserva
    public function __construct ($nombre_cliente, $apellidos_cliente, $telefono_cliente, $fecha, $hora, $personas){
        $this -> nombre_cliente = $nombre_cliente;
        $this -> apellidos_cliente = $apellidos_cliente;
        $this -> telefono_cliente = $telefono_cliente;
        $this -> fecha = $fecha;
        $this -> hora = $hora;
        $this -> personas = $personas;
    }

    //Construccion de setter

    public function setIdReservas ($idReservas){
        $this->idReservas=$idReservas;
    }

    public function setNombre_cliente($nombre_cliente) {
        $this->nombre_cliente = $nombre_cliente;
    }

    public function setApellidos_cliente($apellidos_cliente){
        $this -> apellidos_cliente = $apellidos_cliente;
    }

    public function setTelefono_cliente($telefono_cliente){
        $this -> telefono_cliente = $telefono_cliente;
    }

    public function setFecha($fecha){
        $this -> fecha = $fecha;
    }

    public function setHora($hora){
        $this -> hora = $hora;
    }

    public function setPersonas($personas){
        $this -> personas = $personas;
    }

    //Constructores getter

    public function getIdReservas(){
        return $this->idReservas;
    }

    public function getNombre_cliente() {
        return $this->nombre_cliente;
    }

    public function getApellidos_cliente(){
        return $this->apellidos_cliente;
    }

    public function getTelefono_cliente(){
        return $this->telefono_cliente;
    }

    public function getFecha(){
        return $this ->fecha;
    }

    public function getHora(){
        return $this -> hora;
    }

    public function getPersonas(){
        return $this -> personas;
    }

    public function __toString(){
        return "Reserva: " .$this->nombre_cliente. " ".$this->apellidos_cliente. " Telefono: ".$this->telefono_cliente. " Fecha: ".$this->fecha. " Hora: " .$this->hora. " Personas: ".$this->personas;
    }
}
?>