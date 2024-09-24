<?php
class UserController {
    private $usuarios;

    public function __construct() {
        $this->usuarios = json_decode(file_get_contents('./data/usuarios.json'), true);
    }

    public function login($email, $password) {
        foreach ($this->usuarios as $usuario) {
            if ($usuario['email'] === $email && password_verify($password, $usuario['password'])) {
                session_start();
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['nombre'] = $usuario['nombre'];
                header('Location: noticias.php');
                exit;
            }
        }
        return 'Usuario o contraseña incorrecta.';
    }
    public function logout() {
        session_start();
        session_destroy();  // Destruye toda la sesión
        header('Location: index.php');
        exit;
    }
}

?>