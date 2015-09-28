FROM postgres
MAINTAINER ihsw.aparker@gmail.com

RUN apt-get update -q \
  && apt-get install -yq postgis postgresql-9.4-postgis-2.1

COPY ./container-files /

CMD ["postgres"]
