#!/bin/sh -l

ls -la

composer install -o
./vendor/bin/phpunit
