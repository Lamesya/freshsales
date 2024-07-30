# Freshsales API PHP

## Installation
Requires PHP 8.1

You can install the package via `composer require` command:

```shell
composer require lamesya/freshsales
```

Or simply add it to your composer.json dependences and run `composer update`:

```json
"require": {
    "lamesya/freshsales": "^1.0"
}
```

# Usage

### Using API Token
```php
$token = "XXXXXXXXXXXXXXXXXXX";
$domain = "sample";
$freshsales = new Freshsales($token, $domain);
```

## Available resources
| Resource                  | Methods implemented       | Notes         |
|:--------------------------|:--------------------------|:--------------|
| Account                   | :white_check_mark: 2/5    |               |
| Appointment               | :white_check_mark: 2/5    |               |
| Contact                   | :white_check_mark: 2/5    |               |
| Deal                      | :white_check_mark: 2/5    |               |
| Lead                      | :white_check_mark: 2/5    |               |
| Note                      | :white_check_mark: 2/5    |               |
| SalesActivities           | :white_check_mark: 2/5    |               |
| Task                      | :white_check_mark: 2/5    |               |