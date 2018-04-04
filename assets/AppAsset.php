<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/animate.min.css',
        'css/font-awesome.min.css',
        'css/timeline.css',
        'css/fonts.css',
        'css/perfil.css',
<<<<<<< HEAD
        'css/normalize.css',

=======
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d

    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/custom.js',
        'js/main.js',
<<<<<<< HEAD
=======
     
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
