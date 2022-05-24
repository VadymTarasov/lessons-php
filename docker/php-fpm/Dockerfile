FROM php:8.1-fpm

RUN docker-php-ext-install mysqli
RUN pecl install xdebug && docker-php-ext-enable xdebug

WORKDIR /var/www

CMD ["php-fpm"]

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin