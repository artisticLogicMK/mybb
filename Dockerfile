FROM php:5.6-apache

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Copy your app code to Apache's root directory
COPY . /var/www/html

# Set permissions (optional, depends on your app)
RUN chown -R www-data:www-data /var/www/html

# Expose the default HTTP port
EXPOSE 88