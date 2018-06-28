## Installation

##### Environment variables
copy the example env file and then edit the database connection details
```env
cp .env.example to .env
```

##### Dependencies
```bash
composer install --prefer-dist
php artisan key:generate
php artisan migrate
```


## Run the application
```artisan
php artisan serve
```

## View the application
```app
http://localhost:8000
```