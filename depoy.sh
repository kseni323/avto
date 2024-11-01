#!/bin/bash


set -e

echo "Deploying..."

git pull origin main

php8.3 artisan down

php8.3 composer.phar install 

php8.3 artisan migrate

php8.3 artisan config:cache

php8.3 artisan event:cache

php8.3 artisan route:cache

php8.3 artisan view:cache

php8.3 artisan up

echo "Done!"