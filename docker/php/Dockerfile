FROM php:7.4-fpm

COPY ./docker/php/wait-for-it.sh /usr/bin/wait-for-it
RUN chmod +x /usr/bin/wait-for-it

RUN apt-get update && apt-get install -y git libpq-dev zip unzip
RUN docker-php-ext-install pdo pgsql pdo_pgsql
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /app

CMD composer install ; wait-for-it postgres:5432 -- php seed.php ;  php-fpm
