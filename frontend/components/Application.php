<?php ///[yii2-brainbase v0.10.6 (ADD# frontend\components\Application)]

/**
 * Yii2 Brainbase
 *
 * @link        http://www.brainbook.cc
 * @see         https://github.com/yongtiger/yii2-brainbase
 * @author      Tiger Yong <tigeryang.brainbook@outlook.com>
 * @copyright   Copyright (c) 2017 BrainBook.CC
 * @license     http://opensource.org/licenses/MIT
 */

namespace frontend\components;

use Yii;
use yii\helpers\ArrayHelper;
use yongtiger\setting\Setting;

/**
 * Class Application
 *
 * @package frontend\components
 */
class Application extends \common\components\Application 
{
    /**
     * @inheritdoc
     */
    public function beforeInit() {
        
        parent::beforeInit();

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

            \yongtiger\theme\Bootstrap::filterThemesBootstrap(
                Yii::$app->params['theme']['themesRootPath'], 
                Yii::$app->params['theme']['bootstrapPathFile'], 
                Yii::$app->params['theme']['bootstrapPathPattern']
            );
        }

    }

    /**
     * @inheritdoc
     */
    public function afterInit() {
        
        parent::beforeInit();

        ///[v0.10.5 (filter theme bootstrap)]
        ///You can still run without yii2 extension `yongtiger/yii-theme`.
        if (class_exists('yongtiger\\theme\\Bootstrap')) {

            $activeTheme = \yongtiger\theme\ThemeManager::getActiveTheme(); ///[v0.11.0 (ADD# theme Module, ThemeManager)] ///[v0.11.1 (CHG# activeTheme)]

            if ($activeTheme !== false) {
                $activeTheme = current($activeTheme);   ///[v0.11.1 (CHG# activeTheme)]
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