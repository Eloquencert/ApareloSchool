# Базовий образ із PHP та Apache
FROM php:8.2-apache

# Увімкнення mod_rewrite для Laravel (і не тільки)
RUN a2enmod rewrite

# Копіюємо файли у контейнер
COPY . /var/www/html/

# Встановлюємо DocumentRoot (за потреби)
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Вказуємо порт
EXPOSE 80
