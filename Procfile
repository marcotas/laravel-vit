web: vendor/bin/heroku-php-apache2 public/
release: php artisan migrate --force && php artisan cache:clear && php artisan config:cache
worker: php artisan queue:work
