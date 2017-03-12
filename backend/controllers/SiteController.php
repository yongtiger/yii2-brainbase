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
class SiteController extends Controller
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
                        'actions' => ['error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['index', 'phpinfo', 'frontend-info', 'backend-info'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
     * Displays frontend info.
     *
     * @return mixed
     */
    public function actionFrontendInfo()
    {
        $frontendApp = null;
        Application::remoteAppCall('app-frontend', function($app) use (&$frontendApp) {
            $frontendApp = $app;
        }, function ($config) {
            unset($config['bootstrap']);    ///[yii2-brainbase v0.3.0 (admin:rbac):fix Yii debug disappear in route]
            return $config;
        });

        return $this->render('frontend-info', ['app' => $frontendApp]);
    }

    /**
     * Displays backend info.
     *
     * @return mixed
     */
    public function actionBackendInfo()
    {
        return $this->render('backend-info');
    }

    /**
     * Displays phpinfpo().
     *
     * @return mixed
     */
    public function actionPhpinfo()
    {
        echo phpinfo();
    }
}
