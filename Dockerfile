FROM composer/composer:alpine
WORKDIR /var/lib/nginx/html
COPY . /var/lib/nginx/html
RUN composer update  --ignore-platform-reqs --no-ansi --no-dev --no-interaction \
    --no-progress --no-scripts --optimize-autoloader \
    -d /var/lib/nginx/html


FROM alpine:latest
MAINTAINER Nikita Chernyi <developer.nikus@gmail.com>

RUN apk --no-cache add nginx s6 su-exec php7 php7-fpm php7-json php7-ctype php7-mbstring php7-curl \
    php7-session php7-ldap php7-pdo_mysql php7-openssl php7-redis php7-xml && \
    rm -rf /var/cache/apk/* /tmp/*

COPY --from=0 /var/lib/nginx/html /var/lib/nginx/html
COPY ./docker/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/php-fpm.conf /etc/php7/php-fpm.d/www.conf
COPY ./docker/run.sh /usr/local/bin/run.sh
COPY ./docker/migrate.sh /usr/local/bin/migrate
COPY ./docker/phinx.sh /usr/local/bin/phinx
COPY ./docker/s6.d /etc/s6.d

RUN chmod +x /usr/local/bin/* /etc/s6.d/*/* /etc/s6.d/.s6-svscan/*

VOLUME /var/lib/nginx/html

EXPOSE 8080

CMD ["run.sh"]

