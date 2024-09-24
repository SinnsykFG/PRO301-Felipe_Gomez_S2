# Usar una imagen base de PHP con Apache incluido
FROM php:7.4-apache

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo_mysql mysqli

# Copiar los archivos de la aplicación al directorio predeterminado de Apache
COPY . /var/www/html/

# Dar permisos adecuados a los archivos y carpetas
RUN chown -R www-data:www-data /var/www/html

# Opcional: especificar comandos de arranque o scripts que deben ejecutarse
# Por ejemplo, si tienes scripts de Composer:
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Exponer el puerto 80 para acceder a Apache
EXPOSE 80
