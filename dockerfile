FROM ubuntu
MAINTAINER EDEM GBADABIZO (edemgbadabizo@gmail.com)
RUN apt-get update
RUN apt-get install -y nginx
RUN apt-get install -y php
RUN apt-get install -y php-cli
EXPOSE 80
#ADD uk/  /var/www/html/
RUN rm -Rf /var/www/html/*
RUN git clone https://github.com/gbadabizo/webapp.git /var/www/html
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/
ENTRYPOINT ["/usr/sbin/nginx", "-g", "daemon off;"]