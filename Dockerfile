FROM php:7.1-fpm-alpine

# Install XDebug
ARG INSTALL_XDEBUG
RUN if [ "${INSTALL_XDEBUG}" == true ]; then \
        apk update && apk add g++ autoconf make \
        && pecl install xdebug \
        && docker-php-ext-enable xdebug \
        && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
        && echo "xdebug.remote_handler=dbgp" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
        && echo "xdebug.remote_mode=req" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
        && echo "xdebug.remote_host=docker.local" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
        && echo "xdebug.remote_port=9000" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
        && apk del --purge g++ ;\
    fi

# App Structure
RUN mkdir -p /var/www/html/storage/logs && chmod 777 -R /var/www/html/storage/logs/

# Php Directives
RUN echo "php_admin_value[max_execution_time] = 600" >> /usr/local/etc/php-fpm.d/www.conf \
    && echo "php_admin_value[memory_limit] = 128M" >> /usr/local/etc/php-fpm.d/www.conf

ENV ENV="/etc/profile"
RUN echo "alias test='php vendor/bin/phpunit tests/'" >> /etc/profile

WORKDIR /var/www/html/