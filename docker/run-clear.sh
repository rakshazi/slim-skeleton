#!/bin/sh
cd /var/lib/nginx/html
phinx migrate
exec su-exec root:root /bin/s6-svscan /etc/s6.d
