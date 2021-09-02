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
            'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css',
            'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap',
            'https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap',
            '/style/fonts/stylesheet.css',
            '/js/jquery-ui/jquery-ui.structure.min.css',
            '/js/jquery-ui/jquery-ui.theme.min.css',
            '/js/jquery-ui/jquery-ui.min.css',
            '/style/lk.css',
            '/style/style.css',
            '/style/media.css',
            '/style/media1600.css',
            '/style/media1400.css',
            '/style/media1200.css',
            '/style/media1000.css',
            '/style/media800.css',
            '/style/media700.css',
            '/style/media500.css',
            '/style/media430.css'
    ];
    public $js = [
            //'https://code.jquery.com/jquery-3.5.1.min.js',
            '/js/dist/js/bootstrap.bundle.min.js',
            '/js/dist/js/bootstrap.min.js',
            '/js/jquery-ui/jquery-ui.min.js',
            '/js/mask/dist/inputmask-min.js',
            '/js/custom.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
 