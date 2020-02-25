
## uichecking

uichecking adalah aplikasi web yang digunakan untuk
mempermudah aktivitas Tester dalam melakukan UI Checking
aplikasi Mandiri Online 1.4. Data yang ditampilkan di dapatkan
dari hasil Automation Testing yang terintegrasi dengan Katalon 7.2.1. 
Aplikasi ini menggunakan Framework Laravel 5.8.37

## Instalasi

- XAMPP version 7.2.26-0
- Install Composer
- Download .zip / clone project uichecking
- Extract file
- Create database "testing"
- Import tbl_master into testing
- Setting your environment database (username/password) .env
- Open terminal : cd/Documents/uichecking (route directory uicheching)
- Run :
    1. php artisan config:cache
    2. php artisan cache:clear
    3. php artisan view:clear
    4. php artisan serve
