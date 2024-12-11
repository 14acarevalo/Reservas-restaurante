<?php
//variables de la clase personas/usuario


class Usuarios {
    private $idUsuario;
    private $nombre;
    private $apellidos;
    private $dni;
    private $telefono;
    private $correoElectronico;
    private $password;
    
    // Constructor de la clase
    public function __construct($nombre, $apellidos, $dni, $telefono, $correoElectronico, $password) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
        $this->telefono = $telefono;
        $this->correoElectronico = $correoElectronico;
        $this->password = $password;
    }

    // Métodos setter
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setCorreoElectronico($correoElectronico) {
        $this->correoElectronico = $correoElectronico;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    // Métodos getter
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    public function getPassword() {
        return $this->password;
    }

    public function __toString() {
        return "Usuario: " . $this->nombre . " " . $this->apellidos . ", DNI: " . $this->dni . ", Teléfono: " . $this->telefono . ", Correo: " . $this->correoElectronico;
    }
    
}

?>