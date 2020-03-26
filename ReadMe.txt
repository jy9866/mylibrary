// install composer
composer i

composer create-project --prefer-dist laravel/laravel mylibrary "5.5.*"

php artisan make:migration create_books_table --create=books

php artisan make:migration create_authors_table --create=authors

php artisan make:migration create_publishers_table --create=publishers

php artisan make:model Book

php artisan make:model Author

php artisan make:model Publisher

php artisan make:model Home

php artisan make:controller BookController

php artisan make:controller AuthorController

php artisan make:controller PublishersController

php artisan make:controller HomeController
