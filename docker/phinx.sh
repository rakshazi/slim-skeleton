#!/bin/sh

cd /var/www/app
php7 vendor/bin/phinx "$@" -c config/phinx.php
