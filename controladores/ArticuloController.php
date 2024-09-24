<?php
class ArticuloController {
        
        // Método para mostrar el formulario de registro
        public function showRegisterForm() {
            require_once '../views/nuevoArticulo.php'; // Cargar la vista del formulario
        }
    
        // Método para registrar un nuevo articulo
        public function register() {
            // Obtener los datos del formulario
            $titulo = $_POST['Título'];
            $contenido = $_POST['contenido'];
            $autorId = $_POST['autorId'];
            $categoriaId = $_POST['Categoria'];
            $fechaPublicacion = $_POST['fechaPublicacion'];
            $view = $_POST['views'];
            $imagen = $_POST['imagen'];
    
            // Validación básica
            if (empty($id)|| empty($titulo)|| empty($contenido) || empty($imagen) || empty($autorId)) {
                $error = "Todos los campos son obligatorios.";
                require_once '../views/articulo/register.php';
                return;
            }
    
            // Crear una nueva instancia de articulo
            $articulo = new Articulo($id, $titulo, $contenido, $autorId, $categoriaId, $fechaPublicacion, $view, $imagen);
    
            // Guardar el articulo en la base de datos (simulado)
            $articulo->save();
    
            // Redirigir o mostrar un mensaje de éxito
            echo "Articulo registrado con éxito.";
        }
    
            // Método para mostrar el formulario de inicio de sesión
            public function showLoginForm() {
                require_once '../views/articulo/login.php';  // Cargar la vista del formulario de login
            }
        
            // Método para manejar el inicio de sesión
            public function login() {
                $email = $_POST['email'];
                $password = $_POST['password'];
            }
}

?>