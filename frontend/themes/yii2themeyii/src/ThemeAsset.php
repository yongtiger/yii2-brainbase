<?php

/**
 * Yii2 theme yii
 *
 * @link        http://www.brainbook.cc
 * @see         https://github.com/yongtiger/yii2-theme-yii2
 * @author      Tiger Yong <tigeryang.brainbook@outlook.com>
 * @copyright   Copyright (c) 2017 BrainBook.CC
 * @license     http://opensource.org/licenses/MIT
 */

namespace themes\yii2themeyii\src;

use Yii;

/**
 * Application asset bundle.
 *
 * @package yongtiger\themeyii
 */
class ThemeAsset extends \yongtiger\theme\AssetBundle
{
    // static $themePath = '@yongtiger/themeyii2'; ///optional
    // static $themeUrlReplace = '{themeurl}';    ///optional

    public $css = [
        'css/site.css',
        'css/jquery.atwho.min.css',
        'css/basic/emojify.min.css',
        'css/nanoscroller.css',
    ];

    public $js = [
        'js/main.js',
        'js/jquery.nanoscroller.min.js',
        'js/emojify.min.js',
        'js/at.js',
        'js/jquery.atwho.min.js',
        'js/masonry.pkgd.min.js',
        'js/imagesloaded.pkgd.min.js',
        'js/jquery-ias.js',
        'js/callbacks.js',
        'js/extension/spinner.js',
        'js/extension/noneleft.js',
        'js/extension/paging.js',
        'js/extension/trigger.js',
        'js/jquery.caret.min.js',
    ];
    
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapThemeAsset',
    ];
}
