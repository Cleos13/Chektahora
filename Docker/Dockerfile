FROM php:7.2-apache
WORKDIR /var/www/html

COPY ./config/vhost.conf /etc/apache2/sites-enabled/000-default.conf
COPY ./config/ports.conf /etc/apache2/ports.conf

RUN a2enmod rewrite

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql


EXPOSE 80