FROM php:7.3.3-apache
RUN apt-get update && apt-get upgrade -y
RUN rm /etc/apt/preferences.d/no-debian-php
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install json
RUN apt-get install php-pear -y
RUN apt-get install php-fpm -y
RUN apt-get install php-dev -y
RUN apt-get install php-zip -y
RUN apt-get install php-curl -y
RUN apt-get install php-xmlrpc -y
RUN apt-get install php-gd -y
RUN apt-get install php-mysql -y
RUN apt-get install php-xml -y
RUN apt-get install libapache2-mod-php -y
RUN apt-get install php-xdebug -y
RUN apt-get install composer -y
RUN apt-get install php-mbstring -y
RUN apt-get install curl -y
RUN apt-get update -y 
RUN apt-get upgrade -y
RUN apt-get purge nodejs -y
RUN apt-get install sudo -y
RUN curl -sL https://deb.nodesource.com/setup_12.x | sudo -E bash -
RUN apt-get install nodejs -y
RUN nodejs --version
RUN apt-get update -y

EXPOSE 80