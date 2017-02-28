FROM phpscrapy:latest

COPY php.ini /usr/local/etc/php/
COPY ./src /var/www/html
RUN mkdir -p /var/www/html/data
RUN chown www-data: /var/www/html/data
