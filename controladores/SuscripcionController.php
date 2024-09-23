<?php
class SuscripcionController {

    // Método para mostrar el formulario de registro
    public function showRegisterForm() {
        require_once '../views/suscripcion/register.php'; // Cargar la vista del formulario
    }

    // Método para registrar una nueva suscripcion
    public function register() {
        // Obtener los datos del formulario
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $fecha = $_POST['fecha'];
        $estado = $_POST['estado'];

        // Validación básica
        if (empty($id)|| empty($nombre)|| empty($email) || empty($telefono) || empty($direccion) || empty($fecha) || empty($estado)) {
            $error = "Todos los campos son obligatorios.";
            require_once '../views/suscripcion/register.php';
            return;
        }

        // Crear una nueva instancia de suscripcion
        $suscripcion = new Suscripcion($id, $nombre, $email, $telefono, $direccion, $fecha, $estado);

        // Guardar la suscripcion en la base de datos (simulado)
        $suscripcion->save();

        // Redirigir o mostrar un mensaje de éxito
        echo "Suscripcion registrada con éxito.";
    }

    // Método para mostrar el formulario de inicio de sesión
    public function showLoginForm() {
        require_once '../views/suscripcion/login.php';  // Cargar la vista del formulario de login
    }

    // Método para manejar el inicio de sesión
    public function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
}

?>