# ITRProcess
Developed on Laravel 5.8, On this Income Tax Department which is used by only IT
organizations/firms to file their Income Tax Returns (ITR) yearly. Subsequently
each employee in each of the IT Firm should have to file the ITR whose income
is greater than 5lacs.

Design the database for the same and moreover following the MVC design
pattern implement the working model to show which company hasn’t filed the ITR
in a year. Moreover list all the employees of the same company those who
haven’t filed the ITR (if available).

Database name - itrprocess

After clone repository from github-
Instrall composer & PHP >= 7.1.3 version

Run Composer install/update

Create copy of .env.example with name .env

This is your environment file which is required by laravel project

Open .env file and update this file with your MySQL Connection credentials

After that run the following command-

php artisan key:generate

php artisan config:cache

After that run your migration commands

php artisan migrate

php artisan db:seed

Now Run your project with the following command-

php artisan serve --host 0.0.0.0 --port 8000
