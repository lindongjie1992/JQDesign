<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '//at.alicdn.com/t/font_1260412_gc7hi4fipv6.css',
        'css/fullpage.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery-1.8.3.min.js',
        'js/common.js',
        'js/template.js',
        'js/fullpage.js',
        'js/imagesloaded.pkgd.min.js',
    ];
    public $depends = [
    ];
    public static function addJs($view, $jsfile)
    {
        $view->registerJsFile($jsfile,[AppAsset::className(),'depends' => 'frontend\assets\AppAsset']);
    }
    public static function addCss($view, $cssfile)
    {
        $view->registerCssFile($cssfile, [AppAsset::className()]);
    }
}
