FROM php:5.4-apache

# Install all the packages that we'll need.
RUN apt-get update && \
    apt-get install -y git zlib1g-dev imagemagick libjpeg-dev libpng-dev \
	    mysql-client && \
	docker-php-ext-install zip mysql mysqli gd

# Add the forum source code to the image.  This will be overridden by a
# Docker volume mounted on /var/www/html/ and pointing to ./phpBB when run
# locally, but we'll use this code when building images for the server.
ADD ./phpBB/ composer.phar config-include.php /var/www/html/
RUN mv /var/www/html/install /var/www/html/install-hidden && \
    chmod +x composer.phar && \
    ./composer.phar install && \
    rm -f composer.phar

