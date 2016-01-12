#!/bin/bash
usermod -u 1000 www-data
cd /var/www
php artisan slides:server