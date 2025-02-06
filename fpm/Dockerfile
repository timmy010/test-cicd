# Use the official PHP 8.3 FPM image as the base image
FROM php:8.3-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    curl \
    unzip \
    libpq-dev \
    libzip-dev \
    libxml2-dev \
    libicu-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip sockets dom intl

# Install Redis extension
RUN pecl install redis && docker-php-ext-enable redis

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www/html

# Copy the composer.json and composer.lock files
COPY app/composer.* ./

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy the rest of the application code
COPY app/ ./

# Set proper permissions for the working directory
RUN chown -R www-data:www-data /var/www/html

# Expose port 9000 for PHP-FPM
EXPOSE 9000