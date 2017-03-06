<?php ///[yii2-brainbase v0.9.1 (customize application)]

/**
 * Yii2 Brainbase
 *
 * @link        http://www.brainbook.cc
 * @see         https://github.com/yongtiger/yii2-user
 * @author      Tiger Yong <tigeryang.brainbook@outlook.com>
 * @copyright   Copyright (c) 2017 BrainBook.CC
 * @license     http://opensource.org/licenses/MIT
 */

namespace common\components;

use Yii;
use yongtiger\setting\Setting;

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

    	// Code here ...
        Yii::$app->name = Setting::get('site', 'name', Yii::$app->name);
        Yii::$app->params['brandLabel'] = Setting::get('site', 'brandLabel', Yii::$app->name);
        Yii::$app->params['brandUrl'] = Setting::get('site', 'brandUrl', Yii::$app->homeUrl);
        Yii::$app->params['adminEmail'] = Setting::get('site', 'adminEmail', Yii::$app->params['adminEmail']);
        Yii::$app->params['supportEmail'] = Setting::get('site', 'supportEmail', Yii::$app->params['supportEmail']);
        Yii::$app->params['serviceEmail'] = Setting::get('site', 'serviceEmail', Yii::$app->params['serviceEmail']);

        // adjust bootstrap
        
    }

    /**
     * Do some thing after application init().
     */
    public function afterInit() {

        // Code here ...

    }
}