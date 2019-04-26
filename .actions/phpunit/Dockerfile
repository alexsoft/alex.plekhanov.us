FROM php:7.3-cli-stretch

LABEL "com.github.actions.name"="Alex Plekhanov Us phpunit"

RUN docker-php-ext-install -j$(nproc) common

ADD entrypoint.sh /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]

