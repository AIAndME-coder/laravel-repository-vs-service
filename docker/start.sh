#!/bin/bash

# Start PHP-FPM in the background
php-fpm -D

# Start Vite dev server in the background
cd /var/www/html && npm run dev &

# Start Nginx in the foreground
nginx -g 'daemon off;'
