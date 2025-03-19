## Use PHP 8.2 base image with common extensions
#FROM php:8.2-fpm
#
#ENV COMPOSER_ALLOW_SUPERUSER=1
## Update repository and install necessary dependencies
#RUN apt-get update && apt-get install -y \
#    git \
#    unzip \
#    curl \
#    libpng-dev \
#    libjpeg62-turbo-dev \
#    libfreetype6-dev \
#    libonig-dev \
#    libxml2-dev \
#    libzip-dev \
#    zip \
#    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip \
#    && docker-php-ext-enable opcache
#
#
#WORKDIR /usr/src/blog-app
#
#COPY . . /usr/src/blog-app/
#
## Install Composer
#COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer
#
#
##COPY composer.json composer.lock ./
#
#RUN composer install --no-scripts --no-autoloader --no-dev
#
#RUN composer dump-autoload --optimize --no-dev
#
#RUN chown -R www-data:www-data /usr/src/blog-app/storage /usr/src/blog-app/bootstrap/cache
#
#EXPOSE 8000
#
## Start the Laravel server
#CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
FROM php:8.2-fpm

ENV COMPOSER_ALLOW_SUPERUSER=1

# Update repository and install necessary dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip \
    && docker-php-ext-enable opcache

WORKDIR /usr/src/blog-app

COPY . /usr/src/blog-app/

# Copy composer.json and composer.lock first
COPY composer.json composer.lock ./

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN composer install --no-scripts --no-autoloader --no-dev

# Copy the rest of the application files

# Optimize autoloader
RUN composer dump-autoload --optimize --no-dev

# Set permissions
RUN chown -R www-data:www-data /usr/src/blog-app/storage /usr/src/blog-app/bootstrap/cache

EXPOSE 8000

# Start the Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
