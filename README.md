-Tạo database trên mysql có tên "laravel"

-Clone project về gõ theo các câu lệnh:

cd Lab07_Framework

composer install

copy .env.example .env (đổi port mysql theo .env)

php artisan key:generate

php artisan migrate:fresh --seed

php artisan serve
