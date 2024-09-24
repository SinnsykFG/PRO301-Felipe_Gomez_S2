# Usar la imagen base oficial de PHP con Apache
FROM php:7.4-apache

# Instalar extensiones de PHP necesarias para tu proyecto
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql mysqli zip

# Establecer el directorio raíz del documento de Apache al directorio de Views
ENV APACHE_DOCUMENT_ROOT /var/www/html/Views

# Actualizar la configuración de Apache para usar el nuevo directorio raíz del documento
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Asegurarse de que Apache muestre el index.php como un archivo de índice
RUN echo 'DirectoryIndex index.php' > /etc/apache2/conf-available/docker-php.conf
RUN a2enconf docker-php

# Configurar el nombre del servidor para evitar el mensaje de error de Apache al iniciar
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf

# Copiar el contenido del directorio actual en el contenedor en /var/www/html
COPY . /var/www/html/

# Corregir los permisos de todos los archivos copiados
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80 para el tráfico HTTP
EXPOSE 80

# El siguiente CMD mantiene el contenedor en ejecución y sirve tu aplicación
CMD ["apache2-foreground"]
