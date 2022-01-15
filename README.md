# E-Learning
Features

User Roles Admin, Teacher, Student.

# Installation 

Create a Database Table in phpMyAdmin

Extract the LaraELearn Source Code that has been downloaded to a folder anywhere.

Open Code Editor → Terminal.

Enter these commands one by one (without the $ sign),

$ cp .env.example .env
$ composer install
$ composer update
$ php artisan key:generate
$ php artisan storage:link

Edit the .env file like this,

DB_HOST = 127.0.0.1 // change to Host your database
DB_PORT = 3306
DB_DATABASE = lms // change to the name of the database table that you created
DB_USERNAME = root // change to be your database username, default root
DB_PASSWORD = ... // change to your databse password, null default 

Run this command for Seed : $ php artisan migrate --seed

Done, to run LaraELearn enter the command below: $ php artisan serve
