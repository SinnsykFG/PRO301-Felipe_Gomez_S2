<?php
session_start();

// Redirigir al usuario si no está registrado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ./Index.php');
    exit;
}

?>

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

    <div class="bg-warning text-center py-2">
        <p class="mb-0">Aviso importante: Actualización de noticias</p>
    </div>

    <main>
    <div class="container mt-5">
        <div class="row">
            <h2 class="new-amsterdam" style="font-size: 2.8rem">Noticias</h2>
        </div>

        <div class="row">
            <div class="col-lg-8 mb-4 noticia">
                <h2 class="bungee-tint-regular">Caso Audio: exfiscales coinciden en que es probable que Hermosilla quede en prisión preventiva</h2>
                <img src="img/hermosilla.jpg" alt="Hermosilla" class="img-fluid">
            <p>La Fiscalía ha solicitado la prisión preventiva para Luis Hermosilla, Leonarda Villalobos y Luis Angulo, principales implicados en el 
                Caso Audio, por considerar que representan un peligro de fuga y una amenaza para la sociedad. Estos tres individuos fueron formalizados 
                por soborno, lavado de activos y delitos tributarios. Exfiscales opinan que es probable que el tribunal acepte la solicitud de la Fiscalía, 
                dado la gravedad y la cantidad de delitos imputados, y el hecho de que los acusados, siendo abogados, tienen un deber especial de cumplir 
                con la ley. Durante las audiencias, se presentaron pruebas de transferencias bancarias sospechosas y movimientos financieros irregulares 
                vinculados a los imputados. El exfiscal Carlos Gajardo destacó la contundencia de los antecedentes presentados por la Fiscalía, mientras 
                que el exfiscal Andrés Cruz señaló que los acusados podrían enfrentar penas de hasta 20 años de prisión, sin posibilidad de penas 
                sustitutivas. Por su parte, el fiscal regional de O'Higgins, Emiliano Arias, resaltó la seriedad de la imputación, aunque enfatizó la 
                importancia de escuchar los argumentos de la defensa en la próxima audiencia, antes de que se decrete la medida cautelar. <br>Fuente: Biobio.cl</br>
            </p>
        </div>
        <div class="col-lg-4 mb-4 noticia">
            <h2 class="bungee-tint-regular">Tricel destituye a gobernadora de Región de Coquimbo por notable abandono de deberes</h2>
            <img src="img/kris-naranjo.png" alt="Naranjo" class="img-fluid">
            <p>
                El Tribunal Calificador de Elecciones (Tricel) decidió destituir a la gobernadora de la Región de Coquimbo, Krist Naranjo, acogiendo 
                la solicitud de remoción presentada por los 16 consejeros regionales. Estos la acusaron de notable abandono de sus deberes y faltas 
                graves a la probidad. El fallo del Tricel establece que Naranjo queda inhabilitada para ejercer cualquier cargo público por cinco años. 
                La gobernadora estaba suspendida desde julio debido a una investigación de la Contraloría por mal uso de un vehículo fiscal, aunque 
                este cargo fue desestimado por el tribunal. 
                El Tricel acreditó cinco de los seis cargos presentados, incluyendo falta de documentación para justificar viajes internacionales, 
                maltrato laboral hacia su conductor, mala ejecución presupuestaria en 2022, incumplimiento de acuerdos del Consejo Regional y negligencia 
                en el funcionamiento del Comité Regional para el Cambio Climático. En particular, se mencionó que Naranjo viajó a Egipto, México y Argentina 
                sin proporcionar detalles sobre los objetivos, agenda o financiamiento de dichos viajes. Además, la falta de ejecución del presupuesto y el
                incumplimiento de acuerdos reflejaron una mala gestión, lo que llevó a su destitución e inhabilitación.
            </p>
            <p>
                Fuente: latercera.cl
            </p>
            
        </p>
    </div>
    
    
</div>
<div class="row ">
    <div class="col-lg-4 mb-4 text-center noticia">
                <h2 class="bungee-tint-regular">Récord de audiencia en la última noche de la Convención Demócrata en Chicago | Noticias Telemundo</h2>
                        <div class="object-fit-contain">
                            <iframe width="auto" height="auto" src="https://www.youtube.com/embed/Bx1MZLQan8g?si=aVhT7E3MTwot9nGA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <p>Fuente: Noticias Telemundo</p>
                    </div> 
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-white text-center py-4 mt-5"></footer>
        <p>El Faro - Todos los derechos reservados © 2024</p>
    </footer>
    <script src="./js/script.js"></script>
</body>
</html>