# server_laravel

Dlog Website Repository
- [http://www.dlog.io](http://www.dlog.io).
(Docker EC2 Server)

# Requirement
```
php 5.6 +
mysql 5.6 +
composer
database : homestead, account : homestead / secrect

```

# Installation
```
git clone https://github.com/netfron/server_laravel.git
cd server laravel
composer install
php artisan migrate --env=dev
php artisan serve --env=dev

```

