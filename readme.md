## Installation

##### Dependencies
```bash
composer install --prefer-dist
php artisan migrate
npm install
npm run dev
```
##### Passport oath2
```bash
php artisan passport:install
php artisan vendor:publish --tag=passport-components
```

## Create User
php artisan tinker
```tinker
$user = new User;
$user->username = 'admin';
$user->email = 'admin@localhost';
$user->name = 'Admin';
$user->password = bcrypt('password');
$user->save();
```

## Create OAuth Client
Password client
```client
php artisan passport:client --password
```