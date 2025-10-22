FROM php:8.2-apache

# Enable Apache mod_rewrite for clean URLs
RUN a2enmod rewrite

# Copy project files into container
COPY . /var/www/html/

# Set permissions (adjust as needed)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
