FROM php:7.2-apache

LABEL maintainer="https://github.com/thrnz"

COPY limits.ini $PHP_INI_DIR/conf.d/

COPY *.php /var/www/html/