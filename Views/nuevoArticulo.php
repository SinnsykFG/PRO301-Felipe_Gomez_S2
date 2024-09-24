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
                <a href="../Index.php">
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
      <div class="mb-3">
        <form action="index.php" method="POST" id="form-noticia" class="formulario bg-dark text-white p-4 rounded">
          <input type="hidden" name="action" value="create_article">
          <label for="title">Título:</label>
          <input type="text" name="title" id="title">
          
          <label for="content">Contenido:</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          
          <button type="submit">Crear Artículo</button>
        </form>
      </div>
    </main>
    <footer>
        <div class="container-fluid bg-dark text-white text-center py-3">
          <p>El Faro - Todos los derechos reservados © 2024</p>
        </div>
</body>
