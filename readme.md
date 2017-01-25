# laratracking
a test link tracking "app"


## How to use:

This is a laravel app. so all what you need to do is:

 - clone it:
```
git clone https://github.com/djug/laratracking.git
cd laratracking
```
 -  install the app dependencies:
 `composer install`
 -  create a `.env` file:
 `cp .env.example .env`
 -  update the database info:
```
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```
-  migrate the database:
 `php artisan migrate`
- launch the app
 `php artisan serve`
