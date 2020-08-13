<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## To run the app

Clone the repo, cd into check_data and run the following commands in the terminal:

- Run `composer update` to ensure all dependencies are up to date.
- create a .env file using the .env.example file
- Run php artisan key:generate
- Run php artisan migrate
- Run `php artisan serve` to run server

To test the end on postman:
run http://127.0.0.1:8000/api/databalance/$phonenumber (phonenumber should be one of the phone numbers saved in the database as seed data) as a post request.

- follow the prompt for expected responses 
