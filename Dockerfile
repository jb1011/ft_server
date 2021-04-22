FROM debian:buster

ENV AUTOINDEX=on

RUN apt-get update
RUN apt-get install vim -y
RUN apt-get install php php-fpm php-mysql -y
RUN apt-get install nginx -y
RUN apt-get install procps -y
RUN apt-get install mariadb-server -y
RUN apt-get install wget -y
RUN apt-get install php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip -y
RUN apt-get install curl
COPY srcs/mysite /etc/nginx/sites-available/
COPY srcs/innit.sh /
COPY srcs/wp-config.php /var/www/mysite/wordpress/
COPY srcs/config.inc.php /var/www/mysite/phpmyadmin/
CMD bash innit.sh
