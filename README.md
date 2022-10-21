# CRUD API with Symfony 5

## Introduction

API able to create, update or delete resources in JSON format.

A compatible interface based on Vue 2 is available in this [repository](https://github.com/kserbouty/crud-vuejs).

## Installation

### Requirements

- Apache Server >=2.4
- PHP >=7.2 with Composer

### Local Installation

Install the dependencies

```bash
composer install
```

Set your database in the .env file

```bash
DATABASE_URL="mysql://dbusername:dbpassword@127.0.0.1:3306/dbname?serverVersion=8.0"
```

Create the database

```bash
php bin/console doctrine:database:create
```

Create the table

```bash
php bin/console doctrine:migrations:migrate
```

Add random products

```bash
php bin/console doctrine:fixtures:load
```

Run your server

```bash
php -S localhost:8000 -t public
```

You can now run a compatible [interface](https://github.com/kserbouty/crud-vuejs) and interact with your products (port 8000 already set).

## API Endpoints

### Parameters

| Name          | Type   |
|---------------|--------|
| name          | string |
| description   | string |
| quantity      | int    |
| price         | int    |

### Endpoints

| HTTP    | Endpoint              |
|---------|-----------------------|
| POST    | /api/json/create      |
| POST    | /api/query/create     |
| GET     | /api/json/get         |
| GET     | /api/json/get/{id}    |
| PATCH   | /api/json/update/{id} |
| PUT     | /api/json/update/{id} |
| DELETE  | /api/json/delete/{id} |

## Authors

Karim Serbouty

## License

[MIT License](./LICENSE.md)
