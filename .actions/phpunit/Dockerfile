FROM php:7.3-cli-stretch

LABEL "com.github.actions.name"="Alex Plekhanov Us phpunit"

#RUN apt-get update && apt-get install php7.3-common
RUN docker-php-ext-install -j$(nproc) common

ADD entrypoint.sh /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]

