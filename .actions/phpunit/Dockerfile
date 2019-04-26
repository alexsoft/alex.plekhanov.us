FROM php:7.3-cli-stretch

LABEL "com.github.actions.name"="Alex Plekhanov Us phpunit"

RUN "apt-get install wget"
RUN "wget https://raw.githubusercontent.com/composer/getcomposer.org/5eb0614d3fa7130b363698d3dca52c619b463615/web/installer -O - -q | php -- --quiet"

ADD entrypoint.sh /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh"]

