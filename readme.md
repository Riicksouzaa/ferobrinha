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

### Tips and Tricks

* This website have some security implements, here you can use apache2 to apply them.
* run: **sudo a2enmod headers** and **sudo a2enmod rewrite** to maxximize your security.
* on ubuntu 16.06 or 14.04 go to apache folder and edit your config.
* run: **sudo vim /etc/apache2/apache2.conf** search for something like this:

```
<Directory PATH_TO_YOUR_WEBSITE>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted`         
</Directory>
```

* and add exact this /\
* now restart a apache2 server and enjoy your new security. (sudo service apache2 restart)

## Main Dev
@riicksouzaa

## credits
@gesior

## License
Property
