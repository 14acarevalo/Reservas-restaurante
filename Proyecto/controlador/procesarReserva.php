<?php
require_once 'conexion.php';
require_once 'reservas.php';
require_once 'reservasDao.php';

// Capturar los datos del formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre_cliente = $_POST['nombre_cliente'];
    $apellidos_cliente = $_POST['apellidos_cliente'];
    $telefono_cliente = $_POST['telefono_cliente'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $personas = $_POST['personas'];

    // Crear una instancia de Reservas
    $reserva = new Reservas($nombre_cliente, $apellidos_cliente, $telefono_cliente, $fecha, $hora, $personas);

    // Crear una instancia del DAO
    $reservasDao = new ReservasDao($pdo);

    // Insertar la reserva
    $reservasDao->insertarReserva($reserva);

    // Redirigir o mostrar un mensaje
    echo "Reserva realizada con éxito.";
} else {
    echo "Acceso no permitido.";
}
?>
