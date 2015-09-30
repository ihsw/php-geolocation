FROM ihsw/php-geolocation-base
MAINTAINER ihsw.aparker@gmail.com

RUN apt-get update -q \
  && apt-get install -yq wget php5-pgsql php5-fpm
RUN wget -P /tmp https://phar.phpunit.de/phpunit.phar \
  && chmod +x /tmp/phpunit.phar \
  && mv /tmp/phpunit.phar /usr/bin/phpunit

COPY ./container-files /

CMD ["php5-fpm", "-F"]
