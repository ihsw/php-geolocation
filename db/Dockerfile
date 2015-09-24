FROM postgres
MAINTAINER ihsw.aparker@gmail.com

USER postgres
RUN /etc/init.d/postgresql start \
  && psql --command "CREATE USER docker WITH SUPERUSER PASSWORD 'docker';" \
  && createdb -O docker docker

CMD ["postgres"]
