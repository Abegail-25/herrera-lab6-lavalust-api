
ARG PHP_VERSION=8.5
FROM php:${PHP_VERSION}-apache

# Install PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache modules
RUN a2enmod rewrite headers

# Allow .htaccess overrides
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Configure CORS headers at Apache level
RUN printf '<IfModule mod_headers.c>\n\
Header onsuccess unset Access-Control-Allow-Origin\n\
Header always unset Access-Control-Allow-Origin\n\
Header always set Access-Control-Allow-Origin "*"\n\
Header always set Access-Control-Allow-Methods "GET, POST, PUT, PATCH, DELETE, OPTIONS"\n\
Header always set Access-Control-Allow-Headers "Content-Type, Authorization, X-Requested-With"\n\
</IfModule>\n' > /etc/apache2/conf-available/cors.conf \
    && a2enconf cors

# Copy app files
COPY . /var/www/html/

# Fix permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80