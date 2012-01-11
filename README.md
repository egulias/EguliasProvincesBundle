# Provinces bundle for Symfony2/Doctrine2

This bundle is intended to allow you to easily have the basic structure of regions-provinces of a given country (or all,
I hope).

[![Build
Status](https://secure.travis-ci.org/egulias/EguliasProvincesBundle.png)](http://travis-ci.org/egulias/EguliasProvincesBundle)

## TODO list
  * Use of Ordered data fixtures
  * Add another zoom level (Is needed?)
  * Your suggestions!

## Installation and configuration:

### Get the bundle

Add to your `/deps` file :

```
[EguliasProvincesBundle]
    git=http://github.com/egulias/EguliasProvincesBundle.git
    target=/bundles/Egulias/ProvincesBundle
```
  * Side note: if you want provinces and regions in the database, you will need  `doctrine-fixtures` 
    and `DoctrineFixturesBundle`
    
    ```  
    [doctrine-fixtures]   
        git=http://github.com/doctrine/data-fixtures.git

    [DoctrineFixturesBundle]
        git=http://github.com/symfony/DoctrineFixturesBundle.git
        target=/bundles/Symfony/Bundle/DoctrineFixturesBundle 
    ```
        
And make a `php bin/vendors install`.

### Register the namespace

``` php
<?php

  // app/autoload.php
  $loader->registerNamespaces(array(
      'Egulias' => __DIR__.'/../vendor/bundles',
      // your other namespaces
      ));
```
  * Installation note for Database fixtures:
    Also add this to registerNamespaces

    ``` 'Doctrine\\Common\\DataFixtures' => __DIR__.'/../vendor/doctrine-fixtures/lib',
        'Doctrine\\Common' => __DIR__.'/../vendor/doctrine-common/lib', 
    ```

### Add EguliasProvincesBundle to your application kernel

``` php
<?php

  // app/AppKernel.php
  public function registerBundles()
  {
    return array(
      // ...
      new Egulias\EguliasProvincesBundle\EguliasProvincesBundle(),
      // ...
      );
  }
```

- Installation note for Database fixtures:
  Also add  
  ```new Symfony\Bundle\DoctrineFixturesBundle\DoctrineFixturesBundle(),```

### Usage

  * Without a database
    Just `use` the needed localized `Entity` for regions or provinces (as of this writing, only SpainProvince) and use the
    provided methods.

  * With Database
    - First you'll need to do a `app/console doctrine:schema:update --force` (or `--dump-sql` first to see the sql to be
        executed) to generate the db tables.
    - Secondly you'll need to dump data with
      ```app/console doctrine:fixtures:load --fixtures=vendor/bundles/Egulias/EguliasProvincesBundle/DataFixtures/ORM/```
      If you want just to dump specific countries data, just point to the corresponding data fixture (e.g
      LoadSpanishRegions)
