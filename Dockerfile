FROM php:5.6-apache

RUN a2enmod rewrite \
 && docker-php-ext-install mysqli pdo pdo_mysql \
 && echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

EXPOSE 83