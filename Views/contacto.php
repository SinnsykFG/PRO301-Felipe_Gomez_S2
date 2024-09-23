
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
                <a href="index.html">
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
                  <a class="nav-link" href="deportes.php">Deportes</a>
                  <a class="nav-link" href="negocios.php">Negocios</a>
                  <a class="nav-link" href="contacto.php">Contacto</a>
                </div>
              </div>
            </div>
          </nav>
    </div>

    <div class="bg-warning text-center py-2">
        <p class="mb-0">Avisos importantes: Actualización de noticias</p>
    </div>

    <main class="container my-5">
        <div class="row">
            <h2 class="new-amsterdam text-center fs-1">Contacto</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label fs-4">Nombre</label>
                        <input type="text" class="form-control form-control-lg" id="nombre" placeholder="Nombre completo">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label fs-4">Correo Electrónico</label>
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Correo" aria-label="Correo">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control form-control-lg" placeholder="ejemplo.com" aria-label="Servidor">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label fs-4">Mensaje</label>
                        <textarea class="form-control form-control-lg" id="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..."></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-4 mt-5"></footer>
        <p>El Faro - Todos los derechos reservados © 2024</p>
    </footer>
    <script src="./js/script.js"></script>
</body>
</html>