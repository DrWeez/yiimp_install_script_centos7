#!/bin/bash
################################################################################
#
#	Xavatar / Tatar
#
################################################################################

password=`cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 32 | head -n 1`
password2=`cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 32 | head -n 1`
blckntifypass=`cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 32 | head -n 1`


cd $HOME

mkdir install && cd install
git clone https://github.com/tpruvot/yiimp
sleep 3

cd $HOME/install/yiimp/blocknotify
sudo sed -i 's/tu8tu5/'$blckntifypass'/' blocknotify.cpp
sudo make
sleep 3

cd $HOME/install/yiimp/stratum/iniparser
sudo make
sleep 3

cd $HOME/install/yiimp/stratum
sudo make
sleep 3

sudo cp -r $HOME/install/yiimp/web /var/
sudo mkdir -p /var/stratum
sudo cp -r $HOME/install/yiimp/stratum/config.sample/ /var/stratum
sudo cp -r $HOME/install/yiimp/stratum/config/ /var/stratum
sudo cp -r $HOME/install/yiimp/stratum/stratum /var/stratum
sudo cp -r $HOME/install/yiimp/stratum/run.sh /var/stratum
sudo cp -r $HOME/install/yiimp/bin/. /bin/
sudo cp -r $HOME/install/yiimp/blocknotify/blocknotify /var/stratum
sudo rm -r /var/stratum/config/run.sh
sleep 3

cd /var/stratum/config.sample
sudo sed -i 's/password = tu8tu5/password = '$blckntifypass'/g' *.conf
sudo sed -i 's/server = yaamp.com/server = 'vps496236.ovh.net'/g' *.conf
sudo sed -i 's/host = yaampdb/host = localhost/g' *.conf
sudo sed -i 's/database = yaamp/database = utopooldb/g' *.conf
sudo sed -i 's/username = root/username = stratuser/g' *.conf
sudo sed -i 's/password = patofpaq/password = Gihala84/g' *.conf
sleep 3

sudo touch /var/log/debug.log
sudo chown -R apache:apache /var/stratum
sudo chown -R apache:apache /var/web
sudo chown -R apache:apache /var/log/debug.log
sudo chmod -R 775 /var/web
sudo chmod -R 775 /var/stratum
sudo chmod -R 777 /var/web/yaamp/runtime
sudo chmod -R 775 /var/web/serverconfig.php
sudo chmod -R 644 /var/log/debug.log
sudo chmod -R 775 /var/web/serverconfig.php
sudo ln -s /var/web/ /var/www/html/
sleep 3


clear
echo "Now for the database fun!"
# create database
Q1="CREATE DATABASE IF NOT EXISTS utopooldb;"
Q2="GRANT ALL ON *.* TO 'panel'@'localhost' IDENTIFIED BY '$password';"
Q3="FLUSH PRIVILEGES;"
SQL="${Q1}${Q2}${Q3}"
sudo mysql -u root -p -e "$SQL"
# create stratum user
Q1="GRANT ALL ON *.* TO 'stratum'@'localhost' IDENTIFIED BY '$password2';"
Q2="FLUSH PRIVILEGES;"
SQL="${Q1}${Q2}"
sudo mysql -u root -p -e "$SQL"  

sleep 3
	
echo '
[clienthost1]
user=panel
password='"${password}"'
database=utopooldb
host=localhost
[clienthost2]
user=stratum
password='"${password2}"'
database=utopooldb
host=localhost
' | sudo -E tee ~/.my.cnf >/dev/null 2>&1
      sudo chmod 0600 ~/.my.cnf

	  

systemctl restart httpd.service




