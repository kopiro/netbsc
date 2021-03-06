FROM php:7-fpm-alpine

WORKDIR /app
ENTRYPOINT entrypoint

RUN set -ex && apk update && apk add unzip nano nginx supervisor

RUN mkdir -p /run/nginx

COPY ./conf/php-fpm-pool.conf /usr/local/etc/php-fpm.d/zzzz-docker.conf
COPY ./conf/php.ini /usr/local/etc/php/php.ini
COPY ./conf/nginx.conf /etc/nginx/nginx.conf
COPY ./conf/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

COPY ./entrypoint.sh /bin/entrypoint

RUN curl -sS -k https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
COPY ./app/composer.json /composer/composer.json
RUN cd /composer && composer install && rm -rf ~/.composer/cache

COPY ./app /app
RUN rm -rf /app/vendor; ln -svf /composer/vendor /app/vendor

EXPOSE 80