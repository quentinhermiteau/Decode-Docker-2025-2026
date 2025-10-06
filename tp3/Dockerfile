FROM php:8.4.13-apache

RUN apt-get update && apt-get install -y libpq-dev

RUN docker-php-ext-install pgsql pdo_pgsql
