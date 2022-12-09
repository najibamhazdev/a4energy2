#Pull php-apache image
FROM php:7.4.1-apache

#use root user
USER root

# set working directory to the apache public directory
WORKDIR /
