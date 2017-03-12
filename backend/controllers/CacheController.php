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

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yongtiger\application\Application;

/**
 * Site controller
 *
 * @package backend\controllers
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

    /**
     * Clears caches.
     *
     * @return mixed
     */
     public function actionClearCaches() {

        ///Clear backend cache
        Yii::$app->cache->flush();  

        ///[v0.12.2 (CHG# yongtiger\application\Application::remoteAppCall)]
        ///@see [yongtiger\application 1.0.1 (fix:bug:i18n is invalid after Application::remoteAppCall('app-frontend'))]
        Application::remoteAppCall('app-frontend', function($app) {
            $app->cache->flush();
        }, function ($config) {
            unset($config['bootstrap']);    ///[yii2-brainbase v0.3.0 (admin:rbac):fix Yii debug disappear in route]
            return $config;
        });

        Yii::$app->session->setFlash('success', Yii::t('app', 'Clear caches succeed.'));
        return $this->redirect(['index']);
    }

    /**
     * Clears dirs.
     *
     * @return mixed
     */
    public function actionClearDirs() {
        ///Clear dirs e.g. frontend/backend assets, data etc. 
        ///Note: Even if we add flush() to asset manager, you still need to write script to call this method and perform directory deletion, which isn't easier than you write directly a directory deletion script.
        ///@see https://github.com/yiisoft/yii2/issues/85
        $failDirs = [];
        foreach (Yii::$app->params['clearDirs'] as $dir) {
            $dir = Yii::getAlias($dir);
            if (!$this->destroy_dir($dir, 0)) {
                $failDirs[] = $dir;
            }
        }

        if ($failDirs) {
            Yii::$app->session->setFlash('error', Yii::t('app', 'Failed clear dirs: ') . implode("\n", $failDirs));
        } else {
            Yii::$app->session->setFlash('success', Yii::t('app', 'Clear dirs succeed.'));
        }
        
        return $this->redirect(['index']);
    }

    /**
     * Destroys a dir.
     *
     * @see http://stackoverflow.com/questions/37723515/why-by-every-refreshing-page-cache-reload-anew/37729758#37729758
     * @return mixed
     */
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
