<p align="center"><a href="https://laravel.com" target="_blank"><img width="150"src="https://laravel.com/laravel.png"></a></p>

#Resursi

##PHP, MySQL, Apache
<a href="https://www.apachefriends.org/download.html">https://www.apachefriends.org/download.html</a> ovo se skida prvo, tu se nalaze PHP, Apache i MySQL paketi koji će nam biti potrebni za kasnije.

##Composer
<a href="https://getcomposer.org/download/">https://getcomposer.org/download/</a>

```javascript
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'aa96f26c2b67226a324c27919f1eb05f21c248b987e6195cad9690d5c1ff713d53020a02ac8c217dbf90a7eacc9d141d') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
Composer se koristi za sve dependencije u laravel-u, nešto slično kao bower ili npm za Angular.

##VirtualBox
<a href="https://www.virtualbox.org/wiki/Downloads">https://www.virtualbox.org/wiki/Downloads</a>

Ovde se nalazi VirtualBox koji služi da se preko njega radi menadžment virtuelnih mašina, virtuelne mašine nama služe kao neki lokalni server.

##Vagrant
<a href="https://www.vagrantup.com/downloads.html">https://www.vagrantup.com/downloads.html</a>

Vagrant služi kao build menadžer koji na osnovu Vagrantfile-a pravi okruženje. (više o tome <a href="https://www.vagrantup.com/docs/getting-started/">https://www.vagrantup.com/docs/getting-started/</a>)

##Homestead

```javascript
composer require laravel/homestead --dev
```
Sa ovom komandom u cmd-u instaliramo homestead. 

```javascript
Mac/Linux: php vendor/bin/homestead make
Windows: vendor\\bin\\homestead make
```

Sa ovom komandom buildujemo homestead konfiguracioni fajl pod nazivom Homestead.yaml.

Posle toga potrebno je da nađemo fajl sa imenom Homestead.yaml i da ga otvorimo, zameniti sledeću liniju:

```javascript
ip: "xx.xx.xx.xx" => ip: "192.168.10.10"
sites:
    - map: xxx.xxx => sites:
                        - map: homestead.dev
```
Nakon toga potrebno je naći fajl "hosts":

```javascript
Windows: notepad C:\Windows\System32\Drivers\etc\hosts
Mac: sudo nano /etc/hosts
Linux: sudo vim /etc/hosts
```

Ukoliko ne možete da otvorite fajlove preko konzole, nađite ih ručno u sistemu i editujte ih sa nekim file editorom. Ovako taj fajl izgleda kod mene:

```javascript
##
# Host Database
#
# localhost is used to configure the loopback interface
# when the system is booting.  Do not change this entry.
##
127.0.0.1       localhost
255.255.255.255 broadcasthost
::1             localhost
#Dodati liniju ispod ukoliko je nemate
192.168.10.10 homestead.dev
```