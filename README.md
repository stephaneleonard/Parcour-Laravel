# MyLaravelStack
a Docker Stack for Laravel with apache

# How to use
- create (composer create-project --prefer-dist laravel/laravel my-app) or import your laravel project into the www folder and delete the dummy index.php.
- just run docker-compose up (-d to run it in background).
- if Laravel throw a unable to read error, run "chmod -R 777 /var/www/html/the_name_of_your_app/storage".

# How to Migrate data with php artisan

- your .env file should look like this

DB_CONNECTION=mysql

DB_HOST=db

DB_PORT=3306

DB_DATABASE=name of your db created via pma

DB_USERNAME=root

DB_PASSWORD=password

- to run a migration connect to the webserver container and run 'php artisan migrate'



# What's inside
 - PHP latest
 - MYSQL:latest
 - PHPMYADMIN:latest
 - COMPOSER:latest
 - NPM:latest


