FROM php:7.4-fpm

WORKDIR /app

RUN usermod -u 1000 www-data

RUN apt-get update && apt-get install -y git libpq-dev && docker-php-ext-install pdo pgsql pdo_pgsql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && composer --version
