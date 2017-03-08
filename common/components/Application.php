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

        // code here ...

    }

    /**
     * Do some thing after application init().
     */
    public function afterInit() {

        // code here ...
        
    }
}