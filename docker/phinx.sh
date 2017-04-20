#!/bin/sh

cd /var/lib/nginx/html/app
php7 vendor/bin/phinx "$@" -c config/phinx.php
