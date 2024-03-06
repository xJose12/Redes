# dockerfile
FROM php:7.4-apache
RUN apt update
RUN apt upgrade
COPY pagina/index.html /var/www/html
COPY default.conf /etc/apache2/sites-available/hola.conf
RUN a2ensite hola.conf
RUN service apache2 restart 
RUN apt-get install -y curl
RUN docker-php-ext-install mysqli pdo pdo_mysql