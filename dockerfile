FROM php:8.1-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY ["./source code/on road fuel demand application/", "/var/www/html/"]

ENV PORT=10000
RUN sed -i "s/80/${PORT}/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

EXPOSE ${PORT}

CMD ["apache2-foreground"]
