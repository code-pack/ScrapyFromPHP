# Dockerfile for both php:latest and python:latest

FROM phppython:latest

# COPY requirements.txt /usr/src/app/
# RUN pip install --no-cache-dir -r requirements.txt

COPY php.ini /usr/local/etc/php/
COPY ./src /var/www/html
