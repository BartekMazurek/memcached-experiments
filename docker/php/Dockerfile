FROM php:8.0-fpm

RUN apt-get update && apt-get install -y

RUN apt-get install telnet -y

RUN apt-get install -y libz-dev libmemcached-dev && \
    apt-get install -y memcached libmemcached-tools && \
    pecl install memcached && \
    docker-php-ext-enable memcached

COPY ./docker/php/php.ini $PHP_INI_DIR/

WORKDIR /var/www/html/php
