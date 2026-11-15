FROM php:8.5-cli

RUN apt-get update && apt-get install -y \
    bash \
    git \
    libz-dev \
    zip \
    wget

COPY --from=composer:2.10 /usr/bin/composer /usr/bin/composer
COPY --from=ghcr.io/php/pie:1.5-bin /pie /usr/bin/pie

RUN pie install xdebug/xdebug && docker-php-ext-enable xdebug

WORKDIR /app
