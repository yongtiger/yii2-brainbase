<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'name' => 'My Application',  ///[yii2-brainbase]
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log',
        ///[v0.10.5 (filter theme bootstrap)]
        ///[v0.10.3 (frontend theme:themes\yii2themeyii\src)]@see http://www.yiiframework.com/doc-2.0/guide-structure-applications.html#bootstrap
        // 'themes\yii2themeyii\src\Bootstrap',
    ],
    'controllerNamespace' => 'frontend\controllers',

    'modules' => [

        ///[Yii2 uesr]
        'user' => [
            'class' => 'yongtiger\user\Module',

            // ///Signup
            // 'enableSignup' => false,
            // 'disableSignupMessage' => Yii::t('user', 'This site has been closed registration.'),

            // 'enableSignupWithUsername' => false,
            'enableSignupWithRepassword' => false,
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

            'enableSignupWithCaptcha' => false,

            // ///Login
            // 'enableLogin' => false,
            // 'disableLoginMessage' => Yii::t('user', 'This site has been closed login.'),
            // //////[Yii2 uesr:login with username or email]when both `enableLoginWithUsername` and `enableLoginWithEmail` are `true` 
            // 'enableLoginWithUsername' => false,
            // 'enableLoginWithEmail' => false,

            // 'enableLoginAjaxValidation' => false,
            // 'enableLoginClientValidation' => false,
            // 'enableLoginValidateOnBlur' => false,
            // 'enableLoginValidateOnSubmit' => false,

            'enableLoginWithCaptcha' => false,

            // ///[Yii2 uesr:recovery]
            // 'enableRecoveryPassword' => false,  ///[v0.9.7 (backend:enableRecoveryPassword)]
            // 'recoveryPasswordExpire' => 0,
            // 'recoveryPasswordComposeHtml' => '@yongtiger/user/mail/recover-password-html',
            // 'recoveryPasswordComposeText' => '@yongtiger/user/mail/recover-password-text',
            // 'recoveryPasswordSetFrom' => ['support@brainbook.cc' => 'My Application robot'],

            // ///[Yii2 uesr:account]
            // 'enableAccount' => false,
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
            // 'enableSendToken' => false,
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

            ///[Yii2-user v0.24.4 (ADD# cropAvatar)]
            'cropAvatar' => [
                'class' => 'yongtiger\cropperavatar\actions\CropAvatarAction',
                // 'config'=> [
                //     // Default width of the destination image
                //     'dstImageWidth' => 200,
                //     // Default height of the destination image
                //     'dstImageHeight' => 200,
                //     // Default width of the middle image, empty means no generating
                //     'middleImageWidth'=> 100,
                //     // Default height of the middle image, empty means no generating
                //     'middleImageHeight'=> 100,
                //     // Default width of the small image, empty means no generating
                //     'smallImageWidth' => 50,
                //     // Default height of the small image, empty means no generating 
                //     'smallImageHeight' => 50,
                //     // Avatar upload path
                //     'dstImageFilepath' => '@webroot/upload/avatar',
                //     // Avatar uri
                //     'dstImageUri' => '@web/upload/avatar',
                //     // Avatar upload file name  (no file suffix!)
                //     // 'dstImageFilename' => Yii::$app->user->id,  ///alternative `date('YmdHis')` ///Cannot use `Yii::$app` here!
                //     // The file name suffix of the original image, empty means no generating
                //     'original' => 'original',
                // ],
                ///Cannot configure 'successCallback' here because of `$this`!!!
                // 'successCallback' => new \yii\helpers\ReplaceArrayValue(['anyFunc', 'saveAvatar']),///can be any callable function that called by `call_user_func()`
            ],

            ///[Yii2-user v0.24.5 (ADD# avatarWidgetConfig)]
            'avatarWidgetConfig' => [
                'enableCrop' => true,   ///alternative `Yii::$app->user->id == $model->user_id` ///[v0.22.1 (ADD# enableCrop)]
                'dstImageUri' => '@web/upload/avatar',  ////????bug# show avatar issue at backend!
                // 'noImageUrl' => 'http://oxfordchamber.org/images/board/NoPhotoAvailableMale.jpg',
                // 'isRounded' => true,
                'isModal' => false,
                // 'enableRotateButtons' => false,
                // 'enablePreviewLargelImage' => false,
                // 'enablePreviewMiddlelImage' => false,
                // 'enablePreviewSmalllImage' => false,
            ],

        ],
    ],

    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],

        ///[Yii2 uesr]
        'user' => [
            'identityClass' => 'yongtiger\user\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
            'loginUrl' => ['/user/security/login'],
        ],

        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
            //Whether enable urlManager. Defaults to false.   
            "enablePrettyUrl" => true,    
            // When enable `StrictParsing`, requires that the current request should match at least one routing rule. Otherwise it is considered invalid route.   
            // This option is only available if `enablePrettyUrl` is enabled.    
            "enableStrictParsing" => false,    
            // Whether the entry script is displayed in the URL. Is a further complement to the beautification function.    
            "showScriptName" => false,    
            // Specifies a suffix after the URL, such as .html. Valid only if enablePrettyUrl is enabled.    
            "suffix" => "",    
            "rules" => [        
                "<controller:\w+>/<id:\d+>"=>"<controller>/view",  
                "<controller:\w+>/<action:\w+>"=>"<controller>/<action>"    
            ],
        ],
        */

        ///[Yii2 uesr:oauth]
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yongtiger\authclient\clients\Google',
                    'clientId' => '409149769406-aigbmsp0doiqtgj167c2oqtl294pdbsp.apps.googleusercontent.com',
                    'clientSecret' => 'Y-PGLBHKJWM3XNyCyOXJCbdB',
                    ///'scope' => 'profile email',
                ],
                'twitter' => [
                    'class' => 'yongtiger\authclient\clients\Twitter',
                    'consumerKey' => '8qsSIMpcPm0UWdBpHWl8bGNKY',
                    'consumerSecret' => 'RgE1AGjTVMVxzzGn0W9VB6KinItwT7qySb0yNFyEK3zb7AErlw',
                    'attributeParams' => [
                        'include_email' => 'true'
                    ],
                ],
                'yandex' => [
                    'class' => 'yongtiger\authclient\clients\Yandex',
                    'clientId' => '6c630052d9d7452c802963caf10cc835',
                    'clientSecret' => 'dce654019d944666a77856b5418a11e9',
                ],
                'vkontakte' => [
                    'class' => 'yongtiger\authclient\clients\VKontakte',
                    'clientId' => '5827650',
                    'clientSecret' => '0h9bQ0Jznka53DOS1TjE',
                ],
                'facebook' => [
                    'class' => 'yongtiger\authclient\clients\Facebook',
                    'clientId' => '1821672494750455',
                    'clientSecret' => '312e971fce4ec12c9966790c7a1704fa',
                ],
                'linkedin' => [
                    'class' => 'yongtiger\authclient\clients\LinkedIn',
                    'clientId' => '86ehrtbhkko1tl',
                    'clientSecret' => 'wS39dshiAzr9Myrl',
                    // 'scope' => 'r_basicprofile r_emailaddress'
                ],
                'github' => [
                    'class' => 'yongtiger\authclient\clients\GitHub',
                    'clientId' => 'd9bf109efa527c68d1a7',
                    'clientSecret' => 'af919e40ce0fffdd1650e7bbab8c17bdb18560d4',
                    // 'normalizeUserAttributeMap' => ['username'=>'login'],
                    ///'scope' => 'user:email user',
                    // 'viewOptions' => [
                    //        'popupMode' => false,   ///无效果！被过滤掉了！
                    //        'popupWidth' => 160,    ///有效
                    //        'popupHeight' => 480,   ///有效
                    // ],
                ],
                'live' => [
                    'class' => 'yongtiger\authclient\clients\Live',
                    'clientId' => '11a7aa93-7369-42aa-8477-426aca7d1839',
                    'clientSecret' => '2YjcjkCBYwtiBHyp6mmvauh',
                    ///'scope' => 'wl.basic wl.emails wl.contacts_emails wl.signin',
                ],

                // 'google-hybrid' => [   ///@see http://www.yiiframework.com/doc-2.0/yii-authclient-clients-googlehybrid.html
                //     'class' => 'yongtiger\authclient\clients\GoogleHybrid',
                //     'clientId' => '***',
                //     'clientSecret' => '***',
                //     'scope' => 'email'
                //     'viewOptions' => [
                //         'widget' => [
                //             'class' => 'yii\authclient\widgets\GooglePlusButton',
                //             'buttonHtmlOptions' => [
                //                 'data-approvalprompt' => 'force'
                //             ],
                //         ],
                //     ],
                // ],   ///？？？？？没调试通！

                'yahoo' => [
                    'class' => 'yongtiger\authclient\clients\Yahoo',   ///@see https://github.com/dnshouse/yii2-authclient-extended/blob/master/Yahoo.php
                    'clientId' => 'dj0yJmk9aVMxbnRvclppM1NmJmQ9WVdrOU4zZHlSMVJ3TXpJbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD1iZg--',
                    'clientSecret' => 'f17f0e8925bf17b8ff20a45517c628cd4f78dcdc',
                    ///'scope' => 'openid profile'
                ],
                'amazon' => [
                    'class' => 'yongtiger\authclient\clients\Amazon',   ///@see https://github.com/xjflyttp/yii2-oauth/blob/master/AmazonAuth.php
                    'clientId' => 'amzn1.application-oa2-client.c3b583b90a274981a36d53f47234f111',
                    'clientSecret' => 'd303910396688e088350570281d4896fbb641661bac06ce1ff5a68fdcc4a2717',
                ],
                'instagram' => [
                    'class' => 'yongtiger\authclient\clients\Instagram',
                    'clientId' => '70a18ce48a8c4ffb92b0d5b288bed466',
                    'clientSecret' => '8b59f9def099438b9259b62fc23808fd',
                ],
                'reddit' => [
                    'class' => 'yongtiger\authclient\clients\Reddit',   ///@see https://github.com/amnah/yii2-user/blob/master/components/RedditAuth.php
                    'clientId' => 'rDzcE3ocGlxacg',
                    'clientSecret' => '9SKzxseITtqTgwDQFksUkvVLzwA',
                ],

                'qq' => [
                    'class' => 'yongtiger\authclient\clients\Qq',
                    'clientId' => '101367642',
                    'clientSecret' => '3fce443fcbf5789f8790d7f055de21da',
                ],
                'weixin' => [
                    'class' => 'yongtiger\authclient\clients\Weixin',
                    'clientId' => 'wx2634dbab565e2f27',
                    'clientSecret' => 'aefe4921e37778bd475054b78a6eff30',
                ],
                'weibo' => [
                    'class' => 'yongtiger\authclient\clients\Weibo',
                    'clientId' => '812398870',
                    'clientSecret' => 'e16fef081e8c717d4457434b630312be',
                ],
                // 'douban' => [
                //     'class' => 'yongtiger\authclient\clients\Douban',
                //     'clientId' => '***',
                //     'clientSecret' => '***',
                // ],
                // 'renren' => [
                //     'class' => 'yongtiger\authclient\clients\Renren',
                //     'clientId' => '***',
                //     'clientSecret' => '***',
                // ],

            ],
        ],

        'view' => [
            'params' => [
                'logoutUrl' => ['/user/security/logout'],
                'signupUrl' => ['/user/registration/signup'],

                ///[Yii2 Brainbase v0.8.1 ($this->params['alertClassName'] callable)]
                ///[Yii2 admin release version 2.6.1 (call_user_func([$alertClassName, 'widget']))]
                ///[yii2-adminlte-asset v0.0.11 (call_user_func([$alertClassName, 'widget']))]
                // 'alertClassName' => 'yongtiger\fontawesomealert\widgets\Alert',    ///[yii2-fontawesome-alert]
                'alertClassName' => 'yongtiger\popupalert\widgets\Alert',    ///[yii2-popup-alert]

            ],

            ///[v0.10.5 (filter theme bootstrap)]Comment out the following. @see [[\frontend\components\Application.php:afterInit()]]
            ///[v0.10.0 (frontend theme)]
            // 'theme' => [
            //     'pathMap' => [
            //         // '@frontend/views' => '@yongtiger/themeyii/views',
            //         '@frontend/views' => '@themes/yii2themeyii/src/views',  ///[v0.10.3 (frontend theme:themes\yii2themeyii\src)]
            //     ],
            // ],

        ],

    ],
    'params' => $params,
];
