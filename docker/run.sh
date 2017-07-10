#!/bin/sh
crond -b
cd /var/lib/nginx/html
composer update  --ignore-platform-reqs --no-ansi --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader
migrate
exec su-exec root:root /bin/s6-svscan /etc/s6.d
