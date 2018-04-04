<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/animate.min.css',
        'css/font-awesome.min.css',
        'css/timeline.css',
<<<<<<< HEAD
       
=======
        'css/perfil.css',
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/custom.js',
        'js/jquery.1.11.1.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
