ARG PHP_VERSION
FROM php:$PHP_VERSION-fpm

RUN apt-get update && \
    apt-get install -y curl libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ARG XDEBUG_VERSION

RUN pecl install $XDEBUG_VERSION \
    && docker-php-ext-enable xdebug

WORKDIR /var/www/html

ENTRYPOINT ["php-fpm"]