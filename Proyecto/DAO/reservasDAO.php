<?php

require_once 'conexion.php';
require_once 'reservas.php';


class ReservasDao {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
}
   
public function insertarReserva(Reservas $reservas) {
    try {
        $insertar = "INSERT INTO reservas (nombre_cliente, apellidos_cliente, telefono_cliente, fecha, hora, personas)
                     VALUES (:nombre_cliente, :apellidos_cliente, :telefono_cliente, :fecha, :hora, :personas)";
        $stmt = $this->pdo->prepare($insertar);

        // Utilizamos los getters para obtener los valores de la instancia $usuario
        $stmt->bindParam(':nombre_cliente', $reservas->getNombre_cliente());
        $stmt->bindParam(':apellidos_cliente', $reservas->getApellidos_cliente());
        $stmt->bindParam(':telefono_cliente', $reservas->getTelefono_cliente());
        $stmt->bindParam(':fecha', $reservas->getFecha());
        $stmt->bindParam(':hora', $reservas->getHora());
        $stmt->bindParam(':personas', $reservas->getPersonas());
  
        $stmt->execute();
        echo "Reserva guardada con éxito";
    } catch (PDOException $e) {
        echo "Error al guardar al reservar: " . $e->getMessage();
    }
}


}


?>