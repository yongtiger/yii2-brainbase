<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Site controller
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
        return $this->render('frontendInfo');
    }

    /**
     * Displays backend info.
     *
     * @return mixed
     */
    public function actionBackendInfo()
    {
        return $this->render('backendInfo');
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
