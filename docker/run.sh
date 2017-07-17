#!/bin/sh
crond -b
cd /var/www
composer update  --ignore-platform-reqs --no-ansi --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader
migrate
/bin/s6-svscan /etc/s6.d
