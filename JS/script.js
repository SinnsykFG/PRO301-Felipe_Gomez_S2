function actReloj(){
   let hhmmss=new Date();
   let horas=hhmmss.getHours();
   let minutos=hhmmss.getMinutes();
   let segundos=hhmmss.getSeconds();
   let lahora="";
   let dia=hhmmss.getDate();
   let mes=hhmmss.getMonth()+1;
   let año=hhmmss.getFullYear();

   horas = (horas<=9)?("0"+horas):horas;
   minutos = (minutos<=9)?("0"+minutos):minutos;
   segundos=(segundos<=9)? ("0"+segundos):segundos;
   dia=(dia<=9)?("0"+dia):dia;
   mes=(mes<=9)?("0"+mes):mes;        

    lahora=horas+":"+minutos+":"+segundos;
    lafecha=dia+"/"+mes+"/"+año;
    

   reloj = document.getElementById('reloj')
   reloj.innerHTML=lahora+" - "+lafecha;




    // Mostrar fecha y hora
    document.getElementById('fecha').innerHTML = formattedDate;
    

   setTimeout("actReloj()",1000);
}

// Array que contendrá las noticias
const noticias = [
   {
       titulo: "Caso Audio: exfiscales coinciden en que es probable que Hermosilla quede en prisión preventiva",
       imagen: "img/hermosilla.jpg",
       contenido: "La Fiscalía ha solicitado la prisión preventiva para Luis Hermosilla, Leonarda Villalobos y Luis Angulo, principales implicados en el Caso Audio...",
       fuente: "Biobio.cl"
   },
   {
       titulo: "Tricel destituye a gobernadora de Región de Coquimbo por notable abandono de deberes",
       imagen: "img/kris-naranjo.png",
       contenido: "El Tribunal Calificador de Elecciones (Tricel) decidió destituir a la gobernadora de la Región de Coquimbo, Krist Naranjo, acogiendo la solicitud...",
       fuente: "latercera.cl"
   }
];

// Función que agrega una noticia al contenedor
function agregarNoticia(noticia) {
   // Obtener el contenedor de noticias
   const container = document.getElementById("noticias-container");

   // Crear el nuevo elemento HTML para la noticia
   const noticiaHTML = `
       <div class="col-md-4">
           <h2 class="bungee-tint-regular">${noticia.titulo}</h2>
           <img class="img-noticia" src="${noticia.imagen}" alt="${noticia.titulo}">
           <p class="cuerpo-noticia">${noticia.contenido}</p>
           <p>Fuente: ${noticia.fuente}</p>
       </div>
   `;

   // Insertar la noticia en el contenedor
   container.innerHTML += noticiaHTML;
}

// Función para cargar todas las noticias
function cargarNoticias() {
   noticias.forEach(noticia => {
       agregarNoticia(noticia);
   });
}

// Llamar a la función para cargar las noticias cuando la página cargue
window.onload = cargarNoticias;

function nuevaNoticia() {
   const titulo = document.getElementById('titulo').value;
   const imagen = document.getElementById('imagen').value;
   const contenido = document.getElementById('contenido').value;
   const fuente = document.getElementById('fuente').value;

   const noticia = {
       titulo: titulo,
       imagen: imagen,
       contenido: contenido,
       fuente: fuente
   };

   agregarNoticia(noticia);
}

