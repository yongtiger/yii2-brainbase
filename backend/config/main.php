<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'name' => 'Yii Brainbase',  ///[yii2-brainbase]
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],

    'modules' => [

        ///[yii2-brainbase v0.2.0 (setting)]
        'setting' => [
            'class' => 'yongtiger\setting\Module',
        ],

    ],
    ///[http://www.brainbook.cc]

    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */

        ///[yii2-admin][yii2-adminlte-asset]
        'view' => [
             'theme' => [
                 'pathMap' => [ ///?????'pathMap' is empty : $pathMap = [Yii::$app->getBasePath() => [$basePath]];
                    '@app/views' => '@vendor/yongtiger/yii2-admin/views',   ///[yii2-admin release version 1.2.0 (Layout:main, main-login)]
                    // '@app/views' => '@vendor/yongtiger/yii2-adminlte-asset/src/views',   ///[yii2-adminlte-asset]
                    // ...
                 ],
             ],
        ],

    ],
    'params' => $params,
];
