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