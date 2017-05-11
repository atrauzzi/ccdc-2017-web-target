FROM php:7-apache
MAINTAINER Alexander Trauzzi <atrauzzi@gmail.com>

COPY src/ /var/www

COPY resources/run_report.sh /usr/local/bin/run_report.sh
RUN chmod +x /usr/local/bin/run_report.sh

# Put it in a few suspicious locations
COPY resources/filesystem_flag /root/flag
COPY resources/filesystem_flag /etc/flag
COPY resources/filesystem_flag /opt/flag
COPY resources/filesystem_flag /var/www/flag