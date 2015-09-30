FROM ihsw/php-geolocation-base
MAINTAINER ihsw.aparker@gmail.com

RUN apt-get update -q \
  && apt-get install -yq php5-pgsql php5-fpm

COPY ./container-files /

CMD ["php5-fpm", "-F"]
