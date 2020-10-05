<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## About Laravel Sample CRUD App 
by Zoran Alagjozovski


**Laravel Sample CRUD App** is a simple web application developed to show different aspects of easiness and power of working with Laravel framework. This application utilizes couple of built-in capabilities of this powerful framework. Some of them are:

- [Authentication](https://laravel.com/docs/7.x/authentication).
- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Pagination](https://laravel.com/docs/7.x/pagination#introduction)
- [Resource Controllers (working with CRUD operations)](https://laravel.com/docs/7.x/controllers#resource-controllers).
- [Validation](https://laravel.com/docs/7.x/validation#introduction) 
- [Seeding tables with test data](https://laravel.com/docs/7.x/seeding#writing-seeders)

##
Application expects mysql database named "db_crud" to be found on localhost and have functional seeder for populating the table "contacts" with fake data for testing purposes.
For initialising the application tables and pupulating them with test data, it is recommended to use command: 

- php artisan migrate:fresh --seed 

For user to be able to use the application, he must open an account first, providing valid credentials. All users have acces to listing, creating, updating and deleting contacts from the database.
Any of the columns can be sorted in ascending or descending order.
