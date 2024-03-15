## EldenRing blog

•	Author: Sean Mooney <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:seanMooney1996/Serverside-PHPCA2.git
cd Serverside-PHPCA2
cp .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```

## Creating a review <br>
•	You have to login/register to create a review 
•	The image is obligatory <br>

## Writing a comment <br>
•	You will only be able to write a new review if you're logged in<br>
•	On the index page, only two comments will display<br>


https://www.youtube.com/watch?v=HKJDLXsTr8A&t=132s <--- tutorial on setting up css 
    

