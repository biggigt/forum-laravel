<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Introduction

Simple forum with basic functions made using Laravel framework.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Getting started
## Prerequisites
You need these tools to be installed:
* docker  
* docker-compose

## Fresh start
### Running project
First of all run the project
```
docker-compose up
```
Check if all containers are running in a separate terminal
```
docker ps
```
Do SSH into a running PHP container
```
docker exec -it <container name> /bin/bash
```
Apply following commands to a running PHP container, in order to create clean database
```
php artisan migrate
```
If DB:seed needed use following
```
php composer dump-autoload
php artisan db:seed
```
If you want expand seeding go to ./database/seeds/DatabaseSeeder.php

After this make sure postgres is working:
```
mysql -u user -h 127.0.0.1 -P 3308 -ppass forum
```
### To have another start with clean or other database
Check and remove mysql state:
```
ls docker/mysql/
rm -rf docker/mysql/*
```
Then access mysql
```
mysql -u user -h 127.0.0.1 -P 3308 -ppass forum
```
Get dump
```
mysqldump -u user -h 127.0.0.1 -P 3308 -ppass forum > dump/sql
```
Restore dump
```
mysql -u user -h 127.0.0.1 -P 3308 -ppass forum < dump/sql
```

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
