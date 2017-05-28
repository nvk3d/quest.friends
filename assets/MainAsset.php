<?php
/**
 * Created by PhpStorm.
 * User: nvk3d
 * Date: 28.05.17
 * Time: 19:47
 */

namespace app\assets;


use yii\web\AssetBundle;
use yii\web\View;

class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/main.css',
        'css/font-awesome.min.css'
    ];
    public $js = [
        'js/jquery.min.js',
        'js/jquery.dropotron.min.js',
        'js/jquery.scrolly.min.js',
        'js/jquery.onvisible.min.js',
        'js/skel.min.js',
        'js/util.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset'
    ];
    public $jsOptions = [
        'position' => View::POS_END
    ];
}