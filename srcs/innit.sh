mkdir /var/www/mysite
chown -R /var/www/mysite
chmod -R 765 /var/www/mysite
ln -s /etc/nginx/sites-available/mysite /etc/nginx/sites-enabled/
rm /etc/nginx/sites-enabled/default

mkdir /etc/nginx/ssl
openssl req -new -newkey rsa:4096 -x509 -nodes \
    -keyout /etc/nginx/ssl/mysite.key -out /etc/nginx/ssl/mysite.crt \
    -subj "/C=FR/ST=IDF/L=PARIS/O=42/CN=mysite"
if [ $AUTOINDEX == 'on' ]
then
		sed '24s/#//'  -i /etc/nginx/sites-available/mysite
	fi

mkdir /var/www/mysite/phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar -xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz --strip-components 1 -C /var/www/mysite/phpmyadmin

service nginx start
service php7.3-fpm start
service mysql start
CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

echo "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mysql -u root --skip-password
echo "GRANT ALL ON wordpress.* TO 'jb'@'localhost' IDENTIFIED BY '1' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
mkdir /var/www/mysite/wordpress
cd /tmp && curl -LO https://wordpress.org/latest.tar.gz
tar xzvf latest.tar.gz
cp -a /tmp/wordpress/. /var/www/mysite/wordpress/
while true; do sleep 1000; done

