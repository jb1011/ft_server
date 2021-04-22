FROM debian:buster

ENV AUTOINDEX=on

RUN apt-get update && apt-get install -y \
    vim \
    php php-fpm php-mysql \
    nginx \
    procps \
    mariadb-server \
    wget \
    php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip \
    curl

COPY srcs/mysite /etc/nginx/sites-available/
COPY srcs/innit.sh /
COPY srcs/wp-config.php /var/www/mysite/wordpress/
COPY srcs/config.inc.php /var/www/mysite/phpmyadmin/

CMD bash innit.sh
