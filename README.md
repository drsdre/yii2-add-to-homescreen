
Yii2-add-to-homescreen
=================

Yii2 extension for the [Add To Homescreen](https://github.com/cubiq/add-to-homescreen) Javascript widget

Requirements:
=================

Yii2 and francoispluchino/composer-asset-plugin.

Installation
------------

This extension should be installed through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist drsdre/yii2-add-to-homescreen "*"
```

or add

```json
"drsdre/yii2-add-to-homescreen": "*"
```

to the `require` section of your `composer.json` file.

Usage
-----

In your views/layout/main.php add the following line in the head section:

```php
<?= AddToHomescreenWidget::widget() ;?>
```

Configuration
-----

The widget can be tweaked through the settings variable:

```php
<?= AddToHomescreenWidget::widget(['settings'=>['message'=>'Add']]) ;?>
```

Please visit [http://cubiq.org/add-to-home-screen](http://cubiq.org/add-to-home-screen) for an overview of all possible 
settings.