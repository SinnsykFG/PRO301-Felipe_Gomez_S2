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
        <div class="container-fluid text-center">
            <div class="row">
                <h2 class="new-amsterdam" style="font-size: 2.8rem">Negocios</h2>
            </div>

            <div class="row">
              <div class="col noticia">
                <h2 class="bungee-tint-regular">5 sectores laborales que tendrán una elevada demanda en el futuro (y las habilidades necesarias para tener éxito en ellos)</h2>
                <p class="cuerpo-noticia">El mercado laboral está cambiando más rápido que nunca y muchos de los empleos actuales desaparecerán pronto.

                    Según un estudio reciente del Foro Económico Mundial, hay dos factores principales que están cambiando las cosas: la 
                    aparición de nuevas tecnologías, la automatización y el movimiento hacia la economía verde y la sostenibilidad.                   
                    Se prevé que el rápido avance de las nuevas tecnologías, como el Big Data, la computación en la nube y la inteligencia 
                    artificial, traerá consigo cambios radicales al mercado laboral.                        
                    La buena noticia es que la llegada de nuevas tecnologías da un impulso a toda la economía y, aunque destruye algunos 
                    empleos, crea muchos otros. Después de todo, cuando una empresa puede lograr más con menos recursos, naturalmente se 
                    expande.
                    Los investigadores del Foro Económico Mundial afirman que casi una cuarta parte de todas las profesiones actuales 
                    cambiarán en los próximos cinco años. <br>Fuente: BBC.com</br>
                </p>
              </div>
              <div class="col noticia">
                <h2 class="bungee-tint-regular">Por qué hay temor a una recesión en EE.UU. y qué consecuencias está teniendo en los mercados del mundo</h2> 
                <p class="cuerpo-noticia">Cuando parecía que las aguas estaban tranquilas, volvió a surgir el temor entre los inversores por una posible recesión 
                    económica en Estados Unidos.
                    En medio de esa incertidumbre, las bolsas de Asia, Europa y el país norteamericano se desplomaron este lunes, algo que 
                    sorprendió a quienes confiaban en la solidez de la economía estadounidense.                        
                    La vorágine comenzó con un informe publicado el viernes que refleja las cifras de empleo en EE.UU. El análisis mostró una 
                    desaceleración del mercado laboral mayor de lo que se esperaba, con una tasa de desempleo que subió en julio a 4,3%, un 
                    máximo en casi tres años.                        
                    Sumado al aumento del paro, los empleadores estadounidenses crearon 114.000 puestos de trabajo en julio, cifra muy por 
                    debajo de los esperados 175.000 nuevos empleos.                        
                    Las malas noticias sobre el mercado laboral en EE.UU. reavivaron los miedos de que se produzca una recesión económica, 
                    amenaza que estaba fuera del debate público y que, de un momento a otro, desató una tormenta. <br>Fuente: BBC.com</br>
                </p>
              </div>
              <div class="col noticia">
                <h2 class="bungee-tint-regular">Para qué sirve el anillo inteligente desarrollado por Samsung que cuesta más de US$400</h2>
                <p class="cuerpo-noticia">Samsung espera atraer a los amantes de la tecnología del seguimiento de la salud y el fitness con su dispositivo portátil 
                    más nuevo: el Galaxy Ring. 
                    La compañía de origen coreano lanzó el dispositivo en su evento Galaxy Unpacked el miércoles como la última incorporación 
                    a su ecosistema de dispositivos que, según dice, está potenciado con inteligencia artificial (IA).
                    Los anillos inteligentes, que utilizan sensores diminutos para monitorear diversas métricas de salud, han sido hasta ahora 
                    un producto de nicho, aunque su uso reciente por parte del equipo de fútbol masculino de Inglaterra fue noticia. 
                    Parece que Samsung está intentando cambiar eso, convirtiéndose en la empresa de tecnología más grande en ingresar en el 
                    mercado de los anillos inteligentes. 
                    Ben Wood, analista de CCS Insight, le dijo a la BBC que la elección del producto es una "apuesta interesante" para Samsung, 
                    y su compañía estima que habrá un mercado global total de alrededor de cuatro millones de anillos inteligentes en 2025.
                    <br>Fuente: BBC.com</br>
                </p>
              </div>
            </div>
            <div class="row">
                <div class="col"><img class="img-fluid" src="img/negocio1.png" alt="fururo laboral"></div>
                <div class="col"><img class="img-fluid" src="img/negocio2.png" alt="Recesion"></div>
                <div class="col"><img class="img-fluid" src="img/negocio3.jpg" alt="Anillo Samsung"></div>
                
            </div>
          </div>
    </main>
    <footer class="bg-dark text-white text-center py-4 mt-5"></footer>
        <p>El Faro - Todos los derechos reservados © 2024</p>
    </footer>
    <script src="./js/script.js"></script>
</body>
</html>