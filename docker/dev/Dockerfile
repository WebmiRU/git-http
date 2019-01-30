FROM ubuntu:18.04

MAINTAINER Evgeniy Wolf <e.wolf@webmi.ru>

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get install -y --no-install-recommends --no-install-suggests \
    supervisor \
    php7.2 \
    git \
    ca-certificates \
    apache2 \
    libapache2-mod-authnz-external \
    libapache2-mod-php7.2 \
    php7.2-mbstring \
    php7.2-dom \
    composer \
    vim


RUN mkdir -p /var/lib/git && chown www-data:www-data /var/lib/git \
    && a2enmod cgi rewrite

COPY ./conf/supervisor.conf /etc/supervisor/conf.d/supervisor.conf
COPY ./conf/apache2.conf /etc/apache2/apache2.conf
COPY ./conf/apache2.conf /etc/apache2/apache2.conf

COPY ./gitauth.php /usr/bin/gitauth
RUN chmod +x /usr/bin/gitauth


ENTRYPOINT /usr/bin/supervisord
EXPOSE 80
