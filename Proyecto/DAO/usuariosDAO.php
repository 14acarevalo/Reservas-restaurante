<?php
//Conectamos con el html del proyecto

require_once 'conexion.php'; //Conectamos al archivo conexion.php del proyecto
require_once 'usuarios.php'; //Conectamos con nuestra clase de usuarios

class UsuariosDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Método para insertar un usuario en la base de datos
    public function insertarUsuario(Usuarios $usuario) {
        try {
            $insertar = "INSERT INTO usuarios (nombre, apellidos, dni, telefono, correoElectronico, password)
                         VALUES (:nombre, :apellidos, :dni, :telefono, :correoElectronico, :password)";
            $stmt = $this->pdo->prepare($insertar);

            // Utilizamos los getters para obtener los valores de la instancia $usuario
            $stmt->bindParam(':nombre', $usuario->getNombre());
            $stmt->bindParam(':apellidos', $usuario->getApellidos());
            $stmt->bindParam(':dni', $usuario->getDni());
            $stmt->bindParam(':telefono', $usuario->getTelefono());
            $stmt->bindParam(':correoElectronico', $usuario->getCorreoElectronico());
            $stmt->bindParam(':password', $usuario->getPassword());

            $stmt->execute();
            echo "Usuario guardado con éxito";
        } catch (PDOException $e) {
            echo "Error al guardar el usuario: " . $e->getMessage();
        }
    }
}
?>
