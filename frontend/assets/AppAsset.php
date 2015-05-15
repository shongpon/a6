<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'assets/global/plugins/font-awesome/css/font-awesome.min.css',
        'assets/global/plugins/fancybox/source/jquery.fancybox.css',
        'assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css',
        'assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css',
        'assets/global/css/components-rounded.css',
        'assets/global/plugins/uniform/css/uniform.default.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all',
        'assets/frontend/layout/css/style.css',
        'assets/frontend/pages/css/style-revolution-slider.css',
        'assets/frontend/layout/css/style-responsive.css',
        'assets/frontend/layout/css/themes/orange.css',
        'assets/frontend/layout/css/custom.css',
    ];
    public $js = [
        'assets/frontend/layout/scripts/back-to-top.js',
        'assets/global/plugins/bootstrap/js/bootstrap.min.js',
        'assets/global/plugins/jquery-migrate.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public $jsOptions = array(
    'position' => \yii\web\View::POS_HEAD
);
}

