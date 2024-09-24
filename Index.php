<?php
session_start();

// Incluir el controlador de usuario
require_once './controladores/UserController.php';

$userController = new UserController();
$error = '';

// Verificar si el formulario ha sido enviado y si los campos necesarios están presentes
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Intentar iniciar sesión con las credenciales proporcionadas
    $error = $userController->login($email, $password);
} else {
    $error = 'Por favor, complete todos los campos requeridos.';
}

// Redirigir si ya está logueado
if (isset($_SESSION['usuario_id'])) {
    header('Location: noticias.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Tint&family=New+Amsterdam&display=swap" rel="stylesheet">
    <title>El Faro</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body onload="actReloj(), cargarNoticias()">
    <header>
        <div class="container-fluid text-center" style="background-color: lightseagreen">
            <div class="row">
              <div class="col-4">
                <a href="index.php">
                    <img class="header-logo" src="img/El_faro.webp" alt="logo">
                </a>
              </div>
              <div class="col">
                <h1 style="font-size: 4rem">El Faro <span>Noticias, deportes y negocios</span></h1>
              </div>
              <div class="col">
                <div id="reloj"></div>
              </div>
            </div>
        </div>
    </header>

    <div class="nav-bg">
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar" style="font-size: 2.8rem;">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="../Index.php">Inicio</a>
                  <a class="nav-link" href="../Views/noticias.php">Noticias</a>
                  <a class="nav-link" href="./Views/deportes.php">Deportes</a>
                  <a class="nav-link" href="./Views/negocios.php">Negocios</a>
                  <a class="nav-link" href="./Views/contacto.php">Contacto</a>
                </div>
              </div>
            </div>
          </nav>
    </div>
    <div class="login-container">
        <h2>Bienvenido a El Faro</h2>
        <?php if ($error): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>
        <form action="index.php" method="post">
            <div>
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div>
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <p>No tienes una cuenta? <a href="./Views/register.php">Regístrate aquí</a>.</p>
    </div>
</body>
</html>
