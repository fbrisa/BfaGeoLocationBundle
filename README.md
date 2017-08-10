# BfaGeoLocationBundle


## Requirements
* http://symfony.com/doc/current/assetic/asset_management.html
* https://symfony.com/doc/master/bundles/FOSJsRoutingBundle/index.html
* jQuery


## Installation

Add to composer.json:
```
"require" : {
    "bfa/geolocationbundle": "^1.0"
},
```

```
"repositories" : [{
    "type" : "vcs",
    "url" : "https://github.com/fbrisa/BfaGeoLocationBundle.git"
}]
```

Add to you app/AppKernel.php:
```php
new Bfa\GeoLocationBundle\BfaGeoLocationBundle(),
```



Geenrate symlinks
symfony2:
```bash
php app/console assets:install --symlink web
```

symfony3:
```bash
php bin/console assets:install --symlink web
```

Add route to app/routing.tml

```yml
bfa_geolocation_homepage:
    resource: "@BfaGeoLocationBundle/Controller/"
    type:     annotation
```


## Examples:
See doc folder for a controller and twig example
    