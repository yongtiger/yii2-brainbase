<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class CacheController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'clear-caches', 'clear-dirs'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

     public function actionClearCaches() {

        ///Clear backend cache
        Yii::$app->cache->flush();  

        $appFrontend = $this->remoteAppCall('app-frontend', function($app) {
            $app->cache->flush();
        });

        return $this->render('index');
    }

    public function remoteAppCall($appId, $callback = null) {
        // Save original app.
        $yiiApp = Yii::$app;
        // Create empty config array.
        $config = [];
        // Assemble configuration for current app.
        foreach (Yii::$app->params['yongtiger.admin.configs']['advanced'][$appId] as $configPath) {
            // Merge every new configuration with the old config array.
            $config = yii\helpers\ArrayHelper::merge($config, require (Yii::getAlias($configPath)));
        }
        // Create new app using the config array.
        $app = new \common\components\Application($config); ///[2.6.6 (CHG# \common\components\Application)]
        ///
        if ($callback !== null && $callback instanceof \Closure) {
            call_user_func($callback, $app);
        }
        
        // Dump new app
        unset($app);
        // Switch back to original app.
        Yii::$app = $yiiApp;
        unset($yiiApp);
    }

    public function actionClearDirs() {
        ///Clear dirs e.g. frontend/backend assets, data etc. 
        ///Note: Even if we add flush() to asset manager, you still need to write script to call this method and perform directory deletion, which isn't easier than you write directly a directory deletion script.
        ///@see https://github.com/yiisoft/yii2/issues/85
        foreach (Yii::$app->params['clearDirs'] as $dir) {
            $dir = Yii::getAlias($dir);
            if (!$this->destroy_dir($dir, 0)) {
                Yii::$app->session->setFlash('error', 'Failed clear cache: ' . $dir);
            }
        }

        return $this->render('index');
    }

    ///@see http://stackoverflow.com/questions/37723515/why-by-every-refreshing-page-cache-reload-anew/37729758#37729758
    private function destroy_dir($dir, $i = 1) {
        if (!is_dir($dir) || is_link($dir))
            return unlink($dir);
        foreach (scandir($dir) as $file) {
            if ($file == '.' || $file == '..' || $file == '.gitignore') continue;
            if (!$this->destroy_dir($dir . DIRECTORY_SEPARATOR . $file)) {
                chmod($dir . DIRECTORY_SEPARATOR . $file, 0777);
                if (!$this->destroy_dir($dir . DIRECTORY_SEPARATOR . $file))
                    return false;
            };
        }
        if ($i == 1) return rmdir($dir);
        return true;
    }
}
