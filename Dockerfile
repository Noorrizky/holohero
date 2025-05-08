FROM php:8.1-apache

# Enable mod_rewrite for URL rewriting
RUN a2enmod rewrite

# Allow .htaccess overrides by changing Apache config
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Copy your project files into the container
COPY . /var/www/html/

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

EXPOSE 80
