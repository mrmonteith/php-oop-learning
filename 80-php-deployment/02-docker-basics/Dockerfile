# Dockerfile - Basic PHP container
# Date created: 2025-12-23
# Created by: Michael Monteith

FROM php:8.2-cli
WORKDIR /var/www/html
COPY . .
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
