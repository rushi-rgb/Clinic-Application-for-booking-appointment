#e an official PHP-Apache base image
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Enable Apache mod_rewrite (required for Laravel pretty URLs)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www

# Set Git safe directory
RUN git config --global --add safe.directory /var/www

# Copy Laravel app files
COPY . .

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies (without running scripts/autoloaders)
RUN composer install --no-scripts --no-autoloader

# Set permissions for Laravel directories
RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data /var/www \
    && chmod -R 755 storage bootstrap/cache

# Point Apache DocumentRoot to Laravel's public folder
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/public|g' /etc/apache2/sites-available/000-default.conf

