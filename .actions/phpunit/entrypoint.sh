#!/bin/sh -l

ls -la

composer.phar install -o
./vendor/bin/phpunit
