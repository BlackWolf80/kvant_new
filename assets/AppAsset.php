<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/camera-slider.css',
        'css/flexslider.css',
        'css/carousel.css',
        'css/touchTouch.css',
        'css/style.css',
        'https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/accordion.js',
        'js/superfish.js',
        'js/jquery.hoverIntent.minified.js',
        'js/jquery.easing.1.3.js',
        'js/camera.js',
        'js/jquery.flexslider.js',
        'js/jquery.mobilemenu.js',
        'js/jquery.carouFredSel-6.1.0-packed.js',
        'js/jquery.mobile.customized.min.js',
        'js/jquery.touchSwipe.min.js',
        'js/touchTouch.jquery.js',
        'js/script.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
