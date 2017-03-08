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
use yii\helpers\ArrayHelper;
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

        Yii::$app->name = Setting::get('site', 'name', Yii::$app->name);
        Yii::$app->params['brandLabel'] = Setting::get('site', 'brandLabel', Yii::$app->name);
        Yii::$app->params['brandUrl'] = Setting::get('site', 'brandUrl', Yii::$app->homeUrl);
        Yii::$app->params['adminEmail'] = Setting::get('site', 'adminEmail', Yii::$app->params['adminEmail']);
        Yii::$app->params['supportEmail'] = Setting::get('site', 'supportEmail', Yii::$app->params['supportEmail']);
        Yii::$app->params['serviceEmail'] = Setting::get('site', 'serviceEmail', Yii::$app->params['serviceEmail']);

        ///[v0.10.5 (filter theme bootstrap)]
        ///You can still run without yii2 extension `yongtiger/yii-theme`.
        ///Note: Cannot use `class_exists('yongtiger\\theme\\Bootstrap')` before application init!
        if (is_file($this->getVendorPath() . DIRECTORY_SEPARATOR . 'yongtiger'. DIRECTORY_SEPARATOR . 'yii2-theme' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'Bootstrap.php')) {

            \yongtiger\theme\Bootstrap::filterExtensionsBootstrap();
            
            \yongtiger\theme\Bootstrap::filterThemesBootstrap(
                Yii::$app->params['theme']['themesRootPath'], 
                Yii::$app->params['theme']['bootstrapPathFile'], 
                Yii::$app->params['theme']['bootstrapPathPattern']
            );
        }

    }

    /**
     * Do some thing after application init().
     */
    public function afterInit() {

        ///[v0.10.5 (filter theme bootstrap)]
        ///You can still run without yii2 extension `yongtiger/yii-theme`.
        if (class_exists('yongtiger\\theme\\Bootstrap')) {

            $activeTheme = \yongtiger\theme\Bootstrap::getActiveTheme();

            if ($activeTheme !== false) {
                foreach (Yii::$app->params['theme']['themePathMap'] as $key => $value) {
                    Yii::$app->params['theme']['themePathMap'][$key] = str_replace('{active-theme-path}', $activeTheme['path'], Yii::$app->params['theme']['themePathMap'][$key]);
                }

                ///Configure `Yii::$app->view->theme` with the current theme.
                if (Yii::$app->view->theme) {
                    Yii::$app->view->theme->pathMap = ArrayHelper::merge(Yii::$app->view->theme->pathMap, Yii::$app->params['theme']['themePathMap']);
                } else {
                    Yii::$app->view->theme = Yii::createObject(array_merge(['class' => 'yii\base\Theme'], ['pathMap' => Yii::$app->params['theme']['themePathMap']]));
                }
            }

        }

    }
}