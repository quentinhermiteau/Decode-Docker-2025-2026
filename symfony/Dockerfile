FROM composer:2.8.12

RUN apk update && apk add --no-cache icu-dev

RUN docker-php-ext-install intl

# Configuration PHP pour Symfony
RUN echo "short_open_tag = Off" >> /usr/local/etc/php/php-cli.ini

COPY --link \
    --from=ghcr.io/symfony-cli/symfony-cli:5.15.1 \
    /usr/local/bin/symfony /usr/local/bin/symfony