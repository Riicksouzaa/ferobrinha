## PREMIUM GESIOR BY RICARDO SOUZA
 * Bem vindo ao tutorial de instalação desse lindo website feito com amor e carinho pra vcs meus queridos tibianos.
 * Lembrando que o Projeto todo em si não é de minha autoria ele tem diversos participantes.
 * Essa se trata de uma versão Estável do produto, isso não a deixa livre de bugs.
 * sem mais delongas segue o tutorial.
 
## Installation

### Requirements

* [Apache](http://www.apache.org/) with [mod_rewrite](http://httpd.apache.org/docs/current/mod/mod_rewrite.html) enabled + [PHP](http://php.net) Version 5.6 or newer
* [Composer](http://getcomposer.org) for dependencies like [Blade](https://laravel.com/docs/5.3/blade)

### How to install

* [Download](https://gitlab.com/riicksouzaa/premium-gesior/repository/v1.0.0.0/archive.zip) or clone the Gesior Premium From Gitlab.
* execute composer update on the folder of your website
* change the permission for write in /cache. (sudo chmod -R 777 /cache)

### Installing Composer
```bash
sudo apt-get update
sudo apt-get install curl php-cli php-mbstring git unzip
cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

now go to you project patch and run composer update
```bash
cd /var/www/html
composer update
```

### Tips and Tricks

* This website have some security implements, here you can use apache2 to apply them.
* run: **sudo a2enmod headers** and **sudo a2enmod rewrite** to maxximize your security.
* on ubuntu 16.06 or 14.04 go to apache folder and edit your config.
* run: **sudo vim /etc/apache2/apache2.conf** search for something like this:

```markdown
<Directory PATH_TO_YOUR_WEBSITE>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted         
</Directory>
```

* and add something like this /\
* now restart a apache2 server and enjoy your new security. (sudo service apache2 restart)

### PHP NEEDS THAT FOLLOWING
```bash
sudo apt-get install php5-gd
sudo apt-get install php5-curl
```

Make sure curl is enabled in the php.ini file. For me it's in /etc/php5/apache2/php.ini, if you can't find it, this line might be in /etc/php5/conf.d/curl.ini. Make sure the line :
extension=curl.so

now restart apache.:
```bash
sudo /etc/init.d/apache2 restart
```

## Main Dev
@riicksouzaa

## credits
@gesior

## License
Property
