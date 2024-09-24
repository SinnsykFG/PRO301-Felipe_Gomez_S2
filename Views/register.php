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
                  <a class="nav-link active" aria-current="page" href="Index.php">Inicio</a>
                  <a class="nav-link" href="./deportes.php">Deportes</a>
                  <a class="nav-link" href="./negocios.php">Negocios</a>
                  <a class="nav-link" href="./contacto.php">Contacto</a>
                </div>
              </div>
            </div>
          </nav>
    </div>

    <div class="bg-warning text-center py-2">
        <p class="mb-0">Aviso importante: Actualización de noticias</p>
    </div>
    <main>
        <form action="/index.php" method="POST">
            <input type="hidden" name="action" value="register">
            
            <label for="username">Nombre de Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <!-- Selección del rol del usuario -->
            <label for="role">Rol del usuario:</label>
            <select id="role" name="role">
                <option value="lector">Lector</option>
                <option value="editor">Editor</option>
            </select>

            <button type="submit">Registrarse</button>
        </form>
    </main>
    <footer>
        <div class="container-fluid bg-dark text-white text-center py-3">
            <p>El Faro - 2021</p>
        </div>
</body>

