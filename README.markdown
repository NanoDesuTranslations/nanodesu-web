# Nanodesu Website Project #
This is project of [nanodesu translation](https://nanodesutranslations.wordpress.com/)

## Requirements ##
1. PHP 5.5.9 or above
2. [Composer](https://getcomposer.org/)

## Frameworks & Library ##
1. Laravel 5.2.x

## Build & Run ##
### After Clone this Project ###
1. run command:
    
    * `composer update`
    * `composer install`

2. Set your `.env` file configuration for database and random key.
3. Run [migrations](https://laravel.com/docs/5.2/migrations) and [seeding](https://laravel.com/docs/5.2/seeding) command

    * `php artisan migrate`
    * `php artisan db:seed`

### Development ###
1. We put every Model Class in `app/Models`. So, if you create new Model Class please put in folders `app/Models`.
2. Please follow the [coding style](https://laravel.com/docs/5.2/contributions#coding-style)
