FROM php

EXPOSE 80

COPY ./app /srv/app
WORKDIR /srv/app

CMD ['php', './phpinfo.php']
