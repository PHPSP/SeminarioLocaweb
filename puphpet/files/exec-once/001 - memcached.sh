#!/bin/bash
echo '--> Inserting Memcached Configuration.'
echo "extension=memcached.so">>/etc/php5/mods-available/memcached.ini
php5enmod memcached

echo '--> Restarting PHP5-FPM.'
service php5-fpm restart