#syntax=docker/dockerfile:1.6

ARG PHP_VERSION=8.3
ARG XDEBUG_VERSION=3.3.1
ARG COMPOSER_VERSION=2.6

FROM composer:${COMPOSER_VERSION} AS composer_upstream

FROM php:${PHP_VERSION}-fpm-alpine AS php_upstream
# WORKDIR /var/www/html/

FROM php_upstream AS php_dev
ARG XDEBUG_VERSION
ENV APP_ENV=dev
COPY --from=composer_upstream --link /usr/bin/composer /usr/local/bin/composer
RUN --mount=type=bind,source=.docker,target=docker \
    --mount=type=bind,from=mlocati/php-extension-installer:latest,source=/usr/bin/install-php-extensions,target=/usr/local/bin/install-php-extensions \
  set -eux; \
  sh ./docker/install-php.sh test; \
  mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

FROM composer_upstream AS pre_build
WORKDIR /app/
COPY --link composer.* symfony.* ./
RUN composer install --no-cache --prefer-dist --no-dev --no-autoloader --no-scripts --no-progress
COPY --link bin/console bin/
COPY --link config/ config/
COPY --link public/ public/
COPY --link src/ src/

#FROM php_upstream AS app_test

FROM php_upstream AS app_prod
ENV APP_ENV=prod APP_DEBUG=0 COMPOSER_ALLOW_SUPERUSER=1
COPY --from=pre_build --link /app/ .
RUN --mount=type=bind,source=.docker,target=docker \
    --mount=type=bind,from=composer_upstream,source=/usr/bin/composer,target=/usr/local/bin/composer \
    --mount=type=bind,from=mlocati/php-extension-installer:latest,source=/usr/bin/install-php-extensions,target=/usr/local/bin/install-php-extensions \
  set -eux; \
  sh ./docker/install-php.sh prod; \
  mkdir var; \
  chown www-data var; \
  composer dump-autoload --classmap-authoritative --no-dev; \
#  composer dump-env prod; \
  composer run-script --no-dev post-install-cmd; \
  chmod +x bin/console; sync;
