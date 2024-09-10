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

