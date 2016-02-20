<?php

namespace ando\mustachejs;

use yii\web\AssetBundle;

/**
 * Asset bundle for the mustache templates for JS.
 */
class MustachejsAsset extends AssetBundle
{
    public $sourcePath = '@bower/bower-asset/mustache.js';
    public $js = [
        'mustache.js',
    ];
}
