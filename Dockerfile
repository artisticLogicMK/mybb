FROM php:5.6-apache

RUN a2enmod rewrite \
 && docker-php-ext-install mysqli pdo pdo_mysql \
 && echo "DirectoryIndex index.php" >> /etc/apache2/apache2.conf

# Serve from public/ if needed
COPY public/ /var/www/html/

EXPOSE 80