#!/bin/sh
set -eu

apk update
apk upgrade
apk add --no-cache linux-headers
apk add --update --no-cache --virtual .build-dependencies $PHPIZE_DEPS
install-php-extensions \
  intl \
  pdo_pgsql

if [ "$1" = 'prod' ]; then
  echo '#'
elif [ "$1" = 'test' ]; then
  pecl install xdebug-${XDEBUG_VERSION}
  docker-php-ext-enable xdebug
  pecl clear-cache
  cp ./docker/xdebug.ini "$PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini"
else
  echo "Invalid option: $1"
  exit 1
fi

apk del .build-dependencies
rm -rf /tmp/* /var/tmp/*
mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
