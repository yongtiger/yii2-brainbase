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

    ///[yii2-brainbase v0.3.1 (admin:return home when guest accesses an invalid route)] @see http://www.yiiframework.com/doc-2.0/guide-runtime-handling-errors.html#using-error-actions
    ///When guest users access invalid page (#404), return to the home page, and login users still can see the error message.
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return Yii::$app->user->isGuest ? [] : [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays error page.
     *
     * @return string
     */
    public function actionError()
    {
        $this->goHome()->send();
    }
    ///[http://www.brainbook.cc]

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        ///[yii2-brainbase v0.3.2 (admin:permission_access_backend)]
        Yii::$app->user->on(yii\web\User::EVENT_BEFORE_LOGIN, function ($event) {
            Yii::$app->user->setIdentity($event->identity);
            if (!Yii::$app->user->can('permission_access_backend')) {
                $this->goHome()->send();
                $event->handled = true;
                Yii::$app->getSession()->setFlash('error', Yii::t('app', 'Error! No permission to access backend.'));
                Yii::$app->end();   ///exit immediately and terminate subsequent code execution
            }
        });

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
