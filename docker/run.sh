#!/bin/sh
sleep 15
migrate
exec su-exec root:root /bin/s6-svscan /etc/s6.d
