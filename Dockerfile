FROM php7.4-nginx:latest

# Install composer from the official image
COPY --from=composer /usr/bin/composer /usr/bin/composer

# COPY . /var/www/html
COPY --chown=nobody:nobody . /var/www/html