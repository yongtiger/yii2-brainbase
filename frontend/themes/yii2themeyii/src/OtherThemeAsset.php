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
 * Sample of other asset bundles.
 *
 * @package yongtiger\themeyii
 */
class OtherThemeAsset extends \yongtiger\theme\AssetBundle
{
    public $css = [
        // 'css/other.css',
    ];

    public $js = [
        // 'js/other.js',
    ];
    
    public $depends = [
        'yongtiger\themeyii\ThemeAsset',    ///note!
        // other depends
    ];
}
