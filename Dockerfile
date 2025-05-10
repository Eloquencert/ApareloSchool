FROM php:8.2-apache

# Встановлення залежностей
RUN apt-get update && apt-get install -y \
    libzip-dev unzip zip git curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Встановлення Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копіюємо файли проєкту
COPY . /var/www/html/

# Перенаправляємо DocumentRoot до Laravel's public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN a2enmod rewrite

WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader

EXPOSE 80
