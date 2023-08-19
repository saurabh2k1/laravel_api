
# Laravel App with Roles and Permissions Boilerplate


## Clone the repo

```sh
git clone https://github.com/saurabh2k1/laravel_api.git
cd laravel_api
composer install
```
- Create .env file by copying .env.example
```sh
cp .env.example .env

```
- Create key and migrate the database
```sh
php artisan key:generate
php artisan migrate:fresh

```
- OR if you want seed the database with sample roles and permissions than 

```sh
php artisan migrate:fresh --seed --seeder=PermissionsSeeder
``` 
- If you want only Super Admin call the AdminSeeder 

```sh
php artisan migrate:fresh --seed --seeder=AdminSeeder

```



