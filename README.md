# PharPress

A PHP library to use with the Interactive Code Block

## Requirements

1. [Git](https://git-scm.com/)
2. [PHP](https://www.php.net/) - specifically the php-cli version
3. [Composer](https://getcomposer.org/)
4. [Phar Composer](https://github.com/clue/phar-composer#as-a-phar-recommended) installed as a phar

### Installing Phar Composer

```bash
curl -JOL https://clue.engineering/phar-composer-latest.phar
chmod +x phar-composer-latest.phar
sudo mv phar-composer-latest.phar /usr/local/bin/phar-composer
```

## Installing the required dependencies

```bash
cd /path/to/your/development/folder
git clone https://github.com/jonathanbossenger/pharpress.git
cd pharpress
composer install
```

## Building the Phar

```bash
cd /path/to/your/development/folder/pharpress
phar-composer build . ./pharpress.phar
```
