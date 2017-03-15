<?php ///[v0.12.1 (UGD# replace component/application into yongtiger/appliaction)]

/**
 * Yii2 Brainbase
 *
 * @link        http://www.brainbook.cc
 * @see         https://github.com/yongtiger/yii2-brainbase
 * @author      Tiger Yong <tigeryang.brainbook@outlook.com>
 * @copyright   Copyright (c) 2017 BrainBook.CC
 * @license     http://opensource.org/licenses/MIT
 */

namespace backend\components;

use Yii;

/**
 * Class Application
 *
 * @package backend\components
 */
class Application extends \yongtiger\application\Application 
{
    /**
     * @inheritdoc
     */
    public $isAdminEnd = true;   ///[v0.16.0 (#ADD backend:isAdminEnd)]

    /**
     * @inheritdoc
     */
    public function beforeInit() {

        parent::beforeInit();

        ///[v0.10.5 (filter theme bootstrap)]
        ///You can still run without yii2 extension `yongtiger/yii-theme`.
        ///Note: Cannot use `class_exists('yongtiger\\theme\\Bootstrap')` before application init!
        if (is_file($this->getVendorPath() . DIRECTORY_SEPARATOR . 'yongtiger'. DIRECTORY_SEPARATOR . 'yii2-theme' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Bootstrap.php')) {

            \yongtiger\theme\Bootstrap::filterExtensionsBootstrap();

        }
        
    }

    /**
     * @inheritdoc
     */
    public function afterInit() {
        
        parent::afterInit();

    }
}