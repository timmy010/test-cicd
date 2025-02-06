FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    curl \
    unzip \
    libpq-dev \
    libzip-dev \
    libxml2-dev \
    libicu-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql zip sockets dom intl

RUN pecl install redis && docker-php-ext-enable redis

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY app/composer.* ./

RUN composer install --no-dev --optimize-autoloader

COPY app/ ./

RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000