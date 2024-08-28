#!/bin/bash

phpVersion=$1
if [ -z "${phpVersion}" ]; then
  echo "Could not find php version, please introduce your current php version"
  exit 1
fi

apt install php-pear php${phpVersion}-dev -y

pecl install sqlsrv
pecl install pdo_sqlsrv

printf "; priority=20\nextension=sqlsrv.so\n" > /etc/php/$phpVersion/mods-available/sqlsrv.ini
printf "; priority=30\nextension=pdo_sqlsrv.so\n" > /etc/php/$phpVersion/mods-available/pdo_sqlsrv.ini

phpenmod -v $phpVersion sqlsrv pdo_sqlsrv