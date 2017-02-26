<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
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
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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

    // /**
    //  * Login action.
    //  *
    //  * @return string
    //  */
    // public function actionLogin()
    // {
    //     if (!Yii::$app->user->isGuest) {
    //         return $this->goHome();
    //     }

    //     $model = new LoginForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->login()) {
    //         return $this->goBack();
    //     } else {
    //         return $this->render('login', [
    //             'model' => $model
    //         ]);
    //     }
    // }

    // /**
    //  * Logout action.
    //  *
    //  * @return string
    //  */
    // public function actionLogout()
    // {
    //     Yii::$app->user->logout();

    //     return $this->goHome();
    // }
}
