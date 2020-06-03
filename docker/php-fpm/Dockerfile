FROM php:7.4-fpm-alpine
COPY wait-for-it.sh /usr/bin/wait-for-it
RUN chmod +x /usr/bin/wait-for-it
RUN apk --update --no-cache add git yarn postgresql-dev
RUN docker-php-ext-install pdo pdo_pgsql
COPY --from=composer /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
CMD composer install
CMD wait-for-it postgres:5432 -- php bin/console doctrine:database:create
CMD wait-for-it postgres:5432 -- php bin/console doctrine:migrations:migrate --no-interaction
CMD php-fpm
# CMD yarn install; yarn build; php-fpm
EXPOSE 9000