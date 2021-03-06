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

echo -e "\n\n>> Start the sendmail service - this takes a while...\n"
service sendmail start

echo -e "\n\n>> Ready to run \`php index.php <sender-email> <receiver-email>\`\n"
