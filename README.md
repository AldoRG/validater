# Validater Package

create an validator library for projects on PHP, easy to implement.

## Getting Started

This is a simple library to validate types of data, including numbers, emails, etc.
You can copy this package from composer or via github.

### Prerequisites

For download with composer or git, you need:

```
* Composer
* Git
* PHP
```

### Installing

In your project folder run, once composer installed

Composer:

```
composer require aldorg/validater
```

GitHub:
```
https://github.com/AldoRG/validater.git
```

## Code Examples

All methods needs the data type to validate and is going to return a boolean result, you can validate different types of data using the methods below:

```
Validater::validateEmail("name@example.com");
```

Available methods:

```
* validateBoolean
* validateEmail
* validateInteger
```

## Running the tests

You can test this repository creating a new class in the Test folder, and using PHPUnit. Run your test cases using:

```
vendor/bin/phpunit
```

## Built With

* [PHP](http://php.net/) - PHP language
* [Git](https://git-scm.com/) - Version Control System
* [PHPUnit](https://phpunit.de/) - Programmer-oriented testing framework for PHP

## Contributing

Everyone can contributing to the library, ask me for the process for submitting pull requests to us.

## Versioning

For the versions available, see the [tags on this repository](https://github.com/AldoRG/validater/tags). 

## Authors

* **Aldo Ruiz** - *Initial work* - [AldoRG](https://github.com/AldoRG/)

See also the list of [contributors](https://github.com/AldoRG/validater/contributors) who participated in this project.