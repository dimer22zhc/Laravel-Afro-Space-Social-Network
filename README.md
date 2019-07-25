# Laravel-Afro-Space-Social-Network
Made By BWIMBA MIHANDAGO DIMER

Welcome to the Laravel-Afro-Space-Social-Network wiki!

Initial Installation

* composer create-project --prefer-dist cretueusebiu/laravel-vue-spa
* Edit .env and set your database connection details.
* (When installed via git clone or download, run php artisan key:generate and php artisan jwt:secret).
* php artisan migrate
* npm install

Initial Features
* Laravel 5.8
* Vue + VueRouter + Vuex + VueI18n + ESlint
* Pages with dynamic import and custom layouts
* Login, register, email verification and password reset
* Authentication with JWT
* Socialite integration
* Bootstrap 4 + Font Awesome 5

New Features
1. Comming Soon

Usage

Development

# build and watch
npm run watch

# serve with hot reloading
npm run hot

# Production
npm run production

# Email Verification
To enable email verification make sure that your App\User model implements the Illuminate\Contracts\Auth\MustVerifyEmail contract.
