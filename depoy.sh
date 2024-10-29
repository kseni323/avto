#!/bin/bash


set -e

echo "Deploying..."

git pull origin main

php8.3 atrisan down

php8.3 composer.phar install --no dev

php8.3 artisan migrate

php8.3 artisan config:cache

php8.3 artisan event:cache

php8.3 artisan rote:cache

php8.3 artisan view:cache

php8.3 atrisan up

echo "Done!"