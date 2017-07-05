#!/bin/sh
cd /var/lib/nginx/html
phinx migrate
php-fpm7 -F
