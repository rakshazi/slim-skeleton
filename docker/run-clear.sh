#!/bin/sh
crond -b
cd /var/www
phinx migrate
/bin/s6-svscan /etc/s6.d
