FROM php:8.3-fpm
WORKDIR /var/www
COPY . /var/www
RUN docker-php-ext-install pdo pdo_mysql
