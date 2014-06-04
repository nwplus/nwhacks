# nwHacks Website

To set this up, clone the repo and run the following to install all dependencies and run the migrations:
```
composer install && npm install && php artisan migrate:install && php artisan migrate
```

Run ```gulp``` in development to keep scripts and CSS up to date as you work on them.