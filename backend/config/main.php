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
    'name' => 'My Application',  ///[yii2-brainbase]
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],

    'modules' => [

        ///[yii2-brainbase v0.2.0 (setting)]
        'setting' => [
            'class' => 'yongtiger\setting\Module',
        ],

        ///[Yii2 uesr]
        'user' => [
            'class' => 'yongtiger\user\Module',

            ///Signup
            'enableSignup' => false,
            'disableSignupMessage' => false,    ///[v0.9.5 (backend disableSignupMessage)]

            ///Login
            // 'enableLogin' => false,
            // 'disableLoginMessage' => Yii::t('user', 'This site has been closed login.'),
            //////[Yii2 uesr:login with username or email]when both `enableLoginWithUsername` and `enableLoginWithEmail` are `true` 
            // 'enableLoginWithUsername' => false,
            'enableLoginWithEmail' => false,

            // 'enableLoginAjaxValidation' => false,
            // 'enableLoginClientValidation' => false,
            // 'enableLoginValidateOnBlur' => false,
            // 'enableLoginValidateOnSubmit' => false,

            'enableLoginWithCaptcha' => false,   ///[yii2-adminlte-asset:login layout]

            ///[Yii2 uesr:recovery]
            'enableRecoveryPassword' => false,  ///[v0.9.7 (backend:enableRecoveryPassword)]

            ///[Yii2 uesr:account]
            'enableAccount' => false,

            ///[Yii2 uesr:token]
            'enableSendToken' => false,

            ///[Yii2 uesr:oauth]
            'enableOauth' => false,

            ///Choose one in `yongtiger/admin` and `yongtiger/adminlteasset`:
            'layout' => '@yongtiger/admin/views/layouts/main.php',   ///[yii2-admin:login layout]
            // 'layout' => '@yongtiger/adminlteasset/views/layouts/main.php',  ///[yii2-adminlte-asset:login layout]

        ],
    ],
    ///[http://www.brainbook.cc]

    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],

        ///[Yii2 uesr]
        'user' => [
            'identityClass' => 'yongtiger\user\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
            'loginUrl' => ['/user/security/login'],
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

        'view' => [
            'params' => [

                ///[yii2-admin release version 2.2.0 (view params)]///[yii2-adminlte-asset v0.0.8 (view params)]
                'logoutUrl' => ['/user/security/logout'],

                'bodyClass' => 'skin-blue sidebar-mini',    ///[yii2-adminlte-asset]

                ///[Yii2 Brainbase v0.8.1 ($this->params['alertClassName'] callable)]
                ///[Yii2 admin release version 2.6.1 (call_user_func([$alertClassName, 'widget']))]
                ///[yii2-adminlte-asset v0.0.11 (call_user_func([$alertClassName, 'widget']))]
                // 'alertClassName' => 'yongtiger\fontawesomealert\widgets\Alert',    ///[yii2-fontawesome-alert]
                'alertClassName' => 'yongtiger\popupalert\widgets\Alert',    ///[yii2-popup-alert]

            ],

            'theme' => [
                'pathMap' => [

                    ///Choose one in `yongtiger/admin` and `yongtiger/adminlteasset`:
                    '@backend/views' => '@yongtiger/admin/views',   ///[yii2-admin:login layout]
                    // '@backend/views' => '@yongtiger/adminlteasset/views',   ///[yii2-adminlte-asset:login layout]
                    // '@yongtiger/user/views/security' => '@yongtiger/adminlteasset/views/site',  ///[yii2-adminlte-asset:login layout]Note: 'enableLoginWithCaptcha' must be false!

                ],
            ],
        ],

    ],
    'params' => $params,
];
