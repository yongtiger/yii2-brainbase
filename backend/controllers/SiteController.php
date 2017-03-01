<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use common\models\LoginForm;

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
                        'actions' => ['index'],
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
     * @return string
     */
    public function actionIndex()
    {
        ///[yii2-adminlte-asset]Sets the params parameter `bodyClass` for the current view.
        // Yii::$app->view->params['bodyClass'] = 'skin-blue sidebar-mini';

        ///[yii2-adminlte-asset]Sets the params parameter `userAvatar` for the current view.
        // Yii::$app->view->params['userAvatar'] = '/img/user2-160x160.jpg';    ///??????

        return $this->render('index');
    }
}
