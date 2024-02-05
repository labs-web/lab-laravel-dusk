# Lab-Laravel-Dusk

## Travail à faire

Utiliser laravel dusk pour Tester lab-crud-standard

## Installation 

```bash
composer require --dev laravel/dusk
php artisan dusk:install
```



## Problèmes d'installation
Problème : 

```bash
  # Error
  cURL error 60: SSL certificate problem: unable to get local issuer certificate (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://googlechromelabs.github.io/chrome-for-testing/last-known-good-versions-with-downloads.json
```

Solution 

[cURL error 60: SSL certificate in Laravel 5.4](https://stackoverflow.com/questions/42094842/curl-error-60-ssl-certificate-in-laravel-5-4)

```
Download this file: http://curl.haxx.se/ca/cacert.pem
Place this file in the C:\wamp64\bin\php\php7.1.9 folder
Open php.iniand find this line:
;curl.cainfo

Change it to:

curl.cainfo = "C:\wamp64\bin\php\php7.1.9\cacert.pem"
```

## Création des Tests

```bash
php artisan dusk:make TacheTest
php artisan dusk
```
## Extention google chrome

- https://chromewebstore.google.com/detail/laravel-testtools/ddieaepnbjhgcbddafciempnibnfnakl?hl=en

## Références
- https://unogeeks.com/laravel-selenium/
- https://laravel.com/docs/10.x/dusk
- [Laravel Dusk Tutorials](https://www.youtube.com/playlist?list=PLe30vg_FG4OTxWw8xdgpI6xEvlEdUSw7u)
- https://fajarwz.com/blog/improving-app-quality-exploring-browser-testing-with-laravel-dusk/