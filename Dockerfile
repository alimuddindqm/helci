FROM dockerhub.dqakses.id/php:7.4-fpm-healtcheck

# COPY . /var/www/html
COPY --chown=nobody:nobody . /var/www/html