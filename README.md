//download composer 

//run cmd 
composer install 
create database name laravel_api_rest 

///run cmd 
php artisan migrate 
php artisan db:seed 

php artisan serve 
//
check api data response on follwing url 
for books 

method get 
http://127.0.0.1:8000/api/books 
//
for users 
method get 
http://127.0.0.1:8000/api/users 

//create book 
method post 
http://127.0.0.1:8000/api/book-create?title=magic-of-sicence&price=28&author=demo&editor=demo


//
