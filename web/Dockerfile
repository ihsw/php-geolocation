FROM nginx
MAINTAINER ihsw.aparker@gmail.com

EXPOSE 80

RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf
COPY ./container-files /

CMD ["nginx"]
