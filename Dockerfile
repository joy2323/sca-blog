FROM php:8.0-fpm

USER root

WORKDIR /var/www/html
RUN docker-php-ext-install pdo pdo_mysql sockets

COPY . /var/www/html

COPY ./.env /var/www/html/.env

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install

EXPOSE 80 443