FROM php:8.0.15-apache

RUN apt-get update && \
    apt-get install -y \
    libonig-dev && \
    docker-php-ext-install pdo_mysql mbstring

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/html
