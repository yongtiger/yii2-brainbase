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

        ///[Yii2 uesr]
        'user' => [
            'class' => 'yongtiger\user\Module',

            // ///Signup
            'enableSignup' => false,
            'disableSignupMessage' => false,    ///[v0.9.5 (backend disableSignupMessage)]

            // 'enableSignupWithUsername' => false,
            // 'enableSignupWithRepassword' => false,
            // 'enableSignupWithEmail' => false,

            // 'enableSignupWithEmailActivation' => false,
            // 'signupWithEmailActivationExpire' => 600,
            // 'signupWithEmailActivationComposeHtml' => '@yongtiger/user/mail/activate-status-html',
            // 'signupWithEmailActivationComposeText' => '@yongtiger/user/mail/activate-status-text',
            // 'signupWithEmailActivationSetFrom' => ['support@brainbook.cc' => 'My Application robot'],

            // 'enableSignupAjaxValidation' => false,
            // 'enableSignupClientValidation' => false,
            // 'enableSignupValidateOnBlur' => false,
            // 'enableSignupValidateOnSubmit' => false,

            // 'enableSignupWithCaptcha' => false,

            // ///Login
            // 'enableLogin' => false,
            // 'disableLoginMessage' => Yii::t('user', 'This site has been closed login.'),
            // //////[Yii2 uesr:login with username or email]when both `enableLoginWithUsername` and `enableLoginWithEmail` are `true` 
            // 'enableLoginWithUsername' => false,
            'enableLoginWithEmail' => false,

            // 'enableLoginAjaxValidation' => false,
            // 'enableLoginClientValidation' => false,
            // 'enableLoginValidateOnBlur' => false,
            // 'enableLoginValidateOnSubmit' => false,

            'enableLoginWithCaptcha' => false,   ///[yii2-adminlte-asset:login layout]

            // ///[Yii2 uesr:recovery]
            'enableRecoveryPassword' => false,  ///[v0.9.7 (backend:enableRecoveryPassword)]
            // 'recoveryPasswordExpire' => 0,
            // 'recoveryPasswordComposeHtml' => '@yongtiger/user/mail/recover-password-html',
            // 'recoveryPasswordComposeText' => '@yongtiger/user/mail/recover-password-text',
            // 'recoveryPasswordSetFrom' => ['support@brainbook.cc' => 'My Application robot'],

            // ///[Yii2 uesr:account]
            // 'enableAccountChangeWithPassword' => false,
            // 'enableAccountChangePasswordWithRepassword' => false,
            // 'accountVerificatonExpire' => 600,
            // 'accountVerifyEmailComposeHtml' => '@yongtiger/user/mail/verify-email-html',
            // 'accountVerifyEmailComposeText' => '@yongtiger/user/mail/verify-email-text',
            // 'accountVerifyEmailSetFrom' => ['support@brainbook.cc' => 'My Application robot'],

            // 'enableAccountChangeAjaxValidation' => false,
            // 'enableAccountChangeClientValidation' => false,
            // 'enableAccountChangeValidateOnBlur' => false,
            // 'enableAccountChangeValidateOnSubmit' => false,

            // 'enableAccountChangeWithCaptcha' => false,

            // ///[Yii2 uesr:token]
            // 'enableSendTokenWithoutLoad' => false,
            // 'enableSendTokenAjaxValidation' => false,
            // 'enableSendTokenClientValidation' => false,
            // 'enableSendTokenValidateOnBlur' => false,
            // 'enableSendTokenValidateOnSubmit' => false,

            // 'enableSendTokenWithCaptcha' => false,

            // ///[Yii2 uesr:captcha]
            // 'captcha' => [
            //     'class' => 'yii\captcha\CaptchaAction',
            //     // 'controller'=>'login',  ///The controller that owns this action
            //     // 'backColor'=>0xFFFFFF,  ///The background color. For example, 0x55FF00. Defaults to 0xFFFFFF, meaning white color.
            //     // 'foreColor'=>0x2040A0,  ///The font color. For example, 0x55FF00. Defaults to 0x2040A0 (blue color).
            //     // 'padding' => 5,         ///Padding around the text. Defaults to 2.
            //     // 'offset'=>-2,           ///The offset between characters. Defaults to -2. You can adjust this property in order to decrease or increase the readability of the captcha.
            //     'height' => 36,         ///The height of the generated CAPTCHA image. Defaults to 50. need to be adjusted according to the specific verification code bit
            //     'width' => 96,          ///The width of the generated CAPTCHA image. Defaults to 120.
            //     'maxLength' =>6,        ///The maximum length for randomly generated word. Defaults to 7.
            //     'minLength' =>4,        ///The minimum length for randomly generated word. Defaults to 6.
            //     'testLimit'=>5,         ///How many times should the same CAPTCHA be displayed. Defaults to 3. A value less than or equal to 0 means the test is unlimited (available since version 1.1.2). Note that when 'enableClientValidation' is true (default), it will be invalid!
            //     'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,    ///The fixed verification code. When this property is set, getVerifyCode() will always return the value of this property. This is mainly used in automated tests where we want to be able to reproduce the same verification code each time we run the tests. If not set, it means the verification code will be randomly generated.
            // ],
            // 'captchaActiveFieldWidget' => [
            //     'class' => 'yii\captcha\Captcha',
            //     'imageOptions' => ['alt' => 'Verification Code', 'title' => 'Click to change another verification code.'],
            //     'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
            // ],

            // ///[Yii2 uesr:oauth]
            // 'enableOauth' => false,
            // 'enableOauthSignup' => false,
            // 'enableOauthSignupValidation' => false,
            // 'authChoiceWidgetConfig' => [
            //     'baseAuthUrl' => new \yii\helpers\ReplaceArrayValue(['security/auth']),  ///cannot be `['security/auth']`! ArrayHelper::merge will get wrong result. instead, we use `ReplaceArrayValue`.
            //     // 'popupMode' => false,     ///defaults to true
            //     // 'options' => ['class'=>'control-label'], ///widget div options
            //     'clientOptions' => [
            //         'popup'=> [
            //             'resizable'=>'yes',
            //             'scrollbars'=>'yes',
            //             // 'toolbar'=>'no',
            //             // 'menubar'=>'no',
            //             // 'location'=>'no',
            //             // 'directories'=>'no',
            //             // 'status'=>'yes',
            //             // 'width'=>450,
            //             // 'height'=>380,
            //         ]
            //     ],
            // ],
            // 'auth' => [
            //     'class' => 'yii\authclient\AuthAction',
            //     // 'successCallback' => Yii::$app->user->isGuest ? [$this, 'authenticate'] : [$this, 'connect'],   ///cannot configure 'successCallback' here because of `$this`!!!
            //     ///Cannot use `Yii::$app` here! we will use `Yii::$app->urlManager->createUrl()` in module init() later
            //     ///Cannot be `['security/auth']`! ArrayHelper::merge will get wrong result. instead, we use `ReplaceArrayValue`.
            //     'successUrl' => new \yii\helpers\ReplaceArrayValue(['user/account/index']),
            //     'cancelUrl' => new \yii\helpers\ReplaceArrayValue(['user/security/login']),
            // ]

            // 'layout' => '@yongtiger/admin/views/layouts/main.php',   ///[yii2-admin:login layout]
            'layout' => '@yongtiger/adminlteasset/views/layouts/main.php',  ///[yii2-adminlte-asset:login layout]

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

            ],

            'theme' => [
                'pathMap' => [

                    // '@backend/views' => '@yongtiger/admin/views',   ///[yii2-admin:login layout]
                    '@backend/views' => '@yongtiger/adminlteasset/views',   ///[yii2-adminlte-asset:login layout]
                    '@yongtiger/user/views/security' => '@yongtiger/adminlteasset/views/site',  ///[yii2-adminlte-asset:login layout]Note: 'enableLoginWithCaptcha' must be false!

                ],
            ],
        ],

    ],
    'params' => $params,
];
