FROM php:5.4-apache

# Install all the packages that we'll need.
RUN apt-get update && \
    apt-get install -y git zlib1g-dev imagemagick libjpeg-dev libpng-dev \
	    mysql-client && \
	docker-php-ext-install zip mysql mysqli gd

VOLUME /var/www/html
VOLUME /src
WORKDIR /src
