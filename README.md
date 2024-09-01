<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Admin Sederhana

Admin Sederhana adalah sebuah _boiler plate dashboard_ yang dibangun di atas fondasi [Laravel](https://laravel.com) dan di-development bersama oleh kami, antara lain:

-   [Indra](https://github.com/KingSit3)
-   [Jamal](https://github.com/jamalulinsan)
-   [Reynold](https://github.com/nekrophantom)
-   [Reza](https://github.com/AaEzha)

> Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Langkah-langkah

-   Klon repositori ini: `git clone https://github.com/nurfachmi/admin-sederhana`
-   Masuk ke direktori projek: `cd admin-sederhana`
-   Instal yang diperlukan: `composer install`
-   Buat file .env: `cp .env.example .env`
-   Sesuaikan nilai-nilai pada file .env
-   Buat key aplikasi: `php artisan key:generate`
-   Jalankan migrasi data: `php artisan migrate --seed`
-   Hiduplah! `php artisan serve`

### Administrator

-   email: admin@nurfachmi.com
-   password: password

## Fitur-fitur

-   Login
-   ~~Register~~
-   ~~Forgot Password~~
-   ~~Reset Password~~
-   Dashboard sederhana
-   CRUD User
-   CRUD Role ([Laravel Permission](https://github.com/spatie/laravel-permission))
-   Module Management ([Laravel Modules](https://github.com/nWidart/laravel-modules))
-   Update profile
-   Update password
-   Logout

## C S S

CSS pada template ini menggunakan [Bootstrap CSS](https://getbootstrap.com), khususnya menggunakan tema dari [Bootswatch](https://bootswatch.com/). Anda dengan mudah berganti tema dengan me-_replace_ file **bootstrap.min.css** yang terdapat pada folder **public/css**.

## Tangkapan Layar

#### Login

![Dashboard](/public/images/login.png)

#### Dashboard

![Dashboard](/public/images/dashboard.png)

#### Users

![Dashboard](/public/images/users.png)

#### CRUD User

![Dashboard](/public/images/crud-user.png)

#### Roles

![Dashboard](/public/images/roles.png)

#### CRUD Role

![Dashboard](/public/images/crud-roles.png)

## Kontribusi

Kontribusi Anda sangat diperlukan untuk melengkapi _boilerplate_ admin sederhana ini. Silahkan _fork_, kemudian buat _Pull Request_ untuk setiap fitur atau perbaikan yang dibuat. Kita akan selalu menerima saran dan kritik yang membangun agar aplikasi ini lebih baik kembali.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
