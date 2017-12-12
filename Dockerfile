FROM phpscrapy:latest

COPY php.ini /usr/local/etc/php/
COPY ./src /var/www/html
RUN mkdir -p /var/www/html/data
RUN chown www-data: /var/www/html/data

# TODO: Сделать, чтобы вся сборка осуществлялась одним нажатием кнопки
# TODO: Почему-то парсится только один элемент. Видимо, поменялась разметка сайта
