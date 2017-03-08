<?php

/**
 * Yii2 Brainbase
 *
 * @link        http://www.brainbook.cc
 * @see         https://github.com/yongtiger/yii2-brainbase
 * @author      Tiger Yong <tigeryang.brainbook@outlook.com>
 * @copyright   Copyright (c) 2017 BrainBook.CC
 * @license     http://opensource.org/licenses/MIT
 */

namespace common\components;

use Yii;

/**
 * Class Application
 *
 * @package common\components
 */
class Application extends \yii\web\Application 
{
    /**
     * @inheritdoc
     */
    public function init() {
        $this->beforeInit();
        parent::init();
        $this->afterInit();
    }

    /**
     * Do some thing before application init().
     */
    public function beforeInit() {

        ///[v0.10.5 (filter theme bootstrap)]
        ///You can still run without yii2 extension `yongtiger/yii-theme`.
        ///Note: Cannot use `class_exists('yongtiger\\theme\\Bootstrap')` before application init!
        if (is_file($this->getVendorPath() . DIRECTORY_SEPARATOR . 'yongtiger'. DIRECTORY_SEPARATOR . 'yii2-theme' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Bootstrap.php')) {

            \yongtiger\theme\Bootstrap::filterExtensionsBootstrap();

        }

    }

    /**
     * Do some thing after application init().
     */
    public function afterInit() {

        // code here ...
        
    }
}