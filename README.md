Yii2 mustache.js
================
Yii2-extension for [mustache.js](https://github.com/janl/mustache.js)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ando/yii2-mustache.js "*"
```

or add

```
"ando/yii2-mustache.js": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply add next code to your asset bundle  :

```
public $depends = [
    'ando\mustachejs\MustachejsAsset',
];
```
