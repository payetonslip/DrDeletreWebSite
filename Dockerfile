FROM php:8.4-apache
RUN apt -y update && apt -y upgrade
RUN apt install -y libfreetype6-dev \
&& docker-php-ext-configure gd --with-freetype=/usr/include/freetype2/ \
&& docker-php-ext-install pdo_mysql gd
RUN apt install -y libcurl4-openssl-dev pkg-config libssl-dev
RUN a2enmod rewrite
EXPOSE 80