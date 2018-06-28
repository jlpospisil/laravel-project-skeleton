## Installation

##### Dependencies
```bash
composer install --prefer-dist
php artisan migrate
npm install
npm run dev
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