<?php
// Archivo: UserController.php

require_once '../models/Usuario.php';  // Importamos el modelo del usuario

class UserController {
    
    // Método para mostrar el formulario de registro
    public function showRegisterForm() {
        require_once '../views/user/register.php'; // Cargar la vista del formulario
    }

    // Método para registrar un nuevo usuario
    public function register() {
        // Obtener los datos del formulario
        $id = $_POST['username'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rol = isset($_POST['rol']) ? $_POST['rol'] : 'lector';

        // Validación básica
        if (empty($id)|| empty($nombre)|| empty($password) || empty($email) || empty($password)) {
            $error = "Todos los campos son obligatorios.";
            require_once '../views/user/register.php';
            return;
        }

        //Leer JSON de usuarios
        $usuariosJson = file_get_contents('../data/usuarios.json');
        $usuarios = json_decode($usuarios, true);
        // Crear una nueva instancia de usuario
        $user = new Usuario($id, $nombre, $email, $password, $rol, $suscripcionActiva);
        
        //Se agrega el nuevo usuario a la lista
        $usuarios[] = $nuevoUsuario;

        //Se Guarda la lista atualizada en JSON
        file_put_contents('../data/usuarios.json', json_encode($usuarios));

        // Redirigir o mostrar un mensaje de éxito
        echo "Usuario registrado con éxito.";
    }

    // Método para mostrar el formulario de inicio de sesión
    public function showLoginForm() {
        require_once '../views/user/login.php';  // Cargar la vista del formulario de login
    }

    // Método para manejar el inicio de sesión
    public function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    // Método para mostrar el perfil del usuario
    public function showProfile() {
        require_once '../views/user/profile.php';  // Cargar la vista del perfil
    }
}
?>