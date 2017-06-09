<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class PsgcAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'css/bootstrap.min.css',
		'//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css',
		'css/site.css',
    ];
    public $js = [
		'js/bootstrap/bootstrap.min.js',
		'js/jquery-ui.js',
		//'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
		//'yii\bootstrap\BootstrapPluginAsset',
    ];
}
