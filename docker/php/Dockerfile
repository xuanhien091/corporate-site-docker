FROM phpmyadmin/phpmyadmin

COPY php.ini /usr/local/etc/php/
COPY php.ini-development /usr/local/etc/php/
COPY php.ini-production /usr/local/etc/php/

RUN apt update \
    && apt-get install nano
