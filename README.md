# Laravel Category and Products

## Category module
  - Fields
    - ID(Auto Generated)
    - name

## Product module
  - Actions
    - Create
    - List
  - Fields
    - ID(Auto Generated)
    - caegory_id
    - name

## Setup


#### Clone repository
```bash
git clone https://github.com/smtbos/laravel-category-and-products.git
```

#### Change directory
```bash
cd laravel-category-and-products
```

#### Copy the .env.example to .env
```bash
cp .env.example .env
```

#### Configure follwing details as per requirements
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-category-and-products
DB_USERNAME=root
DB_PASSWORD=
```

#### Install required library
```bash
composer install
```

#### Generate key
```bash
php artisan key:generate
```

#### Migrate database
```bash
php artisan migrate
```

#### Or migrate database with seeder
```bash
php artisan migrate --seed
```

#### Serve project
```bash
php artisan serve
```
