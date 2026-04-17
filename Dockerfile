FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/app