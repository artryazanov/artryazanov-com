#!/usr/bin/env bash

# Enable root
sudo -i

# Vagrant user permissions
usermod -a -G www-data vagrant

# Redis
apt-get -y install redis-server
systemctl enable redis-server.service

# Installing PHP
apt-get -y install ca-certificates apt-transport-https
wget -q https://packages.sury.org/php/apt.gpg -O- | apt-key add -
echo "deb https://packages.sury.org/php/ stretch main" | tee /etc/apt/sources.list.d/php.list
apt-get update
apt-get -y install php7.3 php7.3-cli php7.3-common php7.3-opcache php7.3-curl php7.3-mbstring php7.3-mysql php7.3-zip php7.3-xml

# Install Apache
apt-get install apache2 -y
a2enmod rewrite
cp /var/www/vagrant/provision/artryazanov-sites.conf /etc/apache2/sites-enabled/artryazanov-sites.conf
echo 127.0.0.1 artryazanov.local >> /etc/hosts
rm -rf /var/www/html/
sed -i 's/var\/www\/html/var\/www/g' /etc/apache2/sites-available/000-default.conf
service apache2 restart

# Configuring PHP
cp /vagrant/provision/php.ini /etc/php/7.3/apache2/php.ini > /dev/null 2>&1
cp /vagrant/provision/php.ini /etc/php/7.3/cli/php.ini > /dev/null 2>&1

# Restart Apache
service apache2 restart