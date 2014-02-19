#!/usr/bin/env bash

add-apt-repository ppa:ondrej/php5
apt-get update
apt-get upgrade 
apt-get install -y apache2 php5 libapache2-mod-php5 php5-intl

a2enmod rewrite

mkdir /var/log/apache2/simsab
cp /vagrant/simsab /etc/apache2/sites-available
a2ensite simsab
a2dissite default

service apache2 restart
