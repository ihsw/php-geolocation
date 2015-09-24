FROM php
MAINTAINER ihsw.aparker@gmail.com

EXPOSE 80

RUN apt-get update -q \
  && apt-get install -yq wget php5-pgsql
RUN wget -P /tmp https://phar.phpunit.de/phpunit.phar \
  && chmod +x /tmp/phpunit.phar \
  && mv /tmp/phpunit.phar /usr/bin/phpunit

COPY ./app /srv/app
WORKDIR /srv/app

CMD ["php", "-S", "0.0.0.0:80"]
