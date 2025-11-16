FROM php:8.1-fpm

WORKDIR /var/www/html

# System + PHP extensions required for Laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    && docker-php-ext-install pdo_mysql zip \
    && docker-php-ext-install bcmath

# Install Composer from official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Avoid memory issues
ENV COMPOSER_MEMORY_LIMIT=-1

# Install dependencies
RUN composer install --no-scripts --no-interaction --prefer-dist

# Permissions
RUN chown -R www-data:www-data /var/www/html
