<?php

namespace ando\mustachejs;

use yii\web\AssetBundle;

/**
 * Asset bundle for the mustache templates for JS.
 */
class MustachejsAsset extends AssetBundle
{
    public $sourcePath = '@bower/mustache.js';
    public $js = [
        'mustache.js',
    ];
}
