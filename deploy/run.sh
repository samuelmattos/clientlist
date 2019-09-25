#!/bin/bash 
#service apache2 restart 
service cron restart 
/usr/sbin/apache2ctl -D FOREGROUND 