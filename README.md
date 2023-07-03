# PharPress

A PHP library to use with the Interactive Code Block

## Requirements

1. [Git](https://git-scm.com/)
2. [PHP](https://www.php.net/) - specifically the php-cli
3. [Composer](https://getcomposer.org/)

## Installation

```bash
cd /path/to/your/development/folder
git clone https://github.com/jonathanbossenger/pharpress.git
cd pharpress
composer install
```

## Building the Phar

```bash
cd /path/to/your/development/folder/pharpress
./vendor/bin/phar-composer build . ./pharpress.phar
```
