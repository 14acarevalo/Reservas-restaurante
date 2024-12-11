<?php
$host = 'localhost';
$username = "root";
$password ="1234";
$dbname = "restaurante";

try{
    $pdo = new PDO ("mysql:host=$host;dbname=$dbname", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configura el modo de error a excepciones
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Establece el modo de obtención predeterminado a FETCH_ASSOC
    

    echo "Conexion establecida correctamente";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

?>