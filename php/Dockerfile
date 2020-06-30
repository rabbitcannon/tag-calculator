FROM php:7.4-fpm-alpine

WORKDIR /var/www

### Install docker and php extensions ############################
RUN docker-php-ext-install pdo pdo_mysql

### Install bash ############################
RUN apk update && apk upgrade && apk add --no-cache bash curl

### Install composer ############################
RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer

### Run laravel commands ############################
RUN composer update
#COPY ./php/docker-entrypoint.sh /docker-entrypoint.sh
#RUN ["chmod", "+x", "/docker-entrypoint.sh"]
#
#CMD ["sh", "/docker-entrypoint.sh"]
