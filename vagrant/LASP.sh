export DEBIAN_FRONTEND=noninteractive

apt-get update

apt-get install -y apache2 php5 php5-sqlite sqlite3

chsh -s /bin/bash www-data

ln -s /var/www/sakila-db.dev/conf/sakila-db.dev.conf /etc/apache2/sites-available/sakila-db.dev.conf

chgrp www-data /var/log/apache2
chmod g+w /var/log/apache2
chown www-data.www-data /var/www/sakila-db.dev/public_html
chown www-data.www-data /var/www/sakila-db.dev/conf

a2enmod rewrite

a2dissite 000-default

a2ensite sakila-db.dev.conf

service apache2 reload