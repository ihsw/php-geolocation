FROM ihsw/php-geolocation-base
MAINTAINER ihsw.aparker@gmail.com

EXPOSE 80

RUN apt-get update -q \
  && apt-get install -yq nginx

RUN rm /etc/nginx/sites-enabled/default
RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf
RUN ln -s /etc/nginx/sites-available/app.conf /etc/nginx/sites-enabled/app.conf

COPY ./container-files /

CMD ["nginx"]
