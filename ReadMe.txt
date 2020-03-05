// install composer
composer i

composer create-project --prefer-dist laravel/laravel mylibrary "5.5.*"

php artisan make:migration create_books_table --create=books

php artisan make:migration create_journals_table --create=journals

php artisan make:model Book

php artisan make:model Journal

php artisan make:model Home

php artisan make:controller BookController

php artisan make:controller JournalController

php artisan make:controller HomeController
