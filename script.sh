#!/usr/bin/env bash

set -e

echo -e "\n\n>> Update packages\n"
apt-get update -y

echo -e "\n\n>> Install packages\n"
apt-get install sendmail -y

echo -e "\n\n>> Configure sendmail\n"
echo "sendmail_path=/usr/sbin/sendmail -t -i" >> /usr/local/etc/php/conf.d/sendmail.ini

echo -e "\n\n>> Configure hosts for sendmail\n"
echo "$(hostname -i)\t$(hostname) $(hostname).localhost" >> /etc/hosts

echo -e "\n\n>> Start the service in the background\n"
service sendmail start &

echo -e "\n\n>> Run the script\n"
php index.php

exit 0