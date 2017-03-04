<?php
return [

    ///[yii2-brainbase v0.1.0 (i18n)]
    ///If commented out, the default language is `en-US`.
    ///If set to `en-US`, Yii will look for the translation file \app\ messages\en-US. If there is no `en-US` translation file, Yii will try to find the `en` translation file.
    ///Note: It is not recommended to comment out the language settings! Should be set to `en` or `zh-CN` or other languages, otherwise it will affect the brainbase `long text translation` function.
    // 'language' => 'en', ///[yii2-brainbase v0.1.0 (i18n)]long text translation
    'language' => 'zh-CN',

    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    'modules' => [
    
        ///[yii2-brainbase v0.8.0 (admin&user:code reconstruction)]
        'admin' => [
            'class' => 'yongtiger\admin\Module',
        ],
        ///[http://www.brainbook.cc]

        ///[yii2-brainbase v0.9.5 (profile region widget)]
        'region' => [
            'class' => 'yongtiger\region\Module',
        ],
    ],

    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        ///[yii2-brainbase v0.1.0 (i18n)]
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',   ///app i18n international language default directory
                ],
                'common' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',   ///common i18n international language default directory
                ],
            ],
        ],
        ///[http://www.brainbook.cc]

        ///[yii2-brainbase v0.3.0 (admin:rbac)]
        'authManager' => [
        
            ///[yii2-brainbase v0.3.0 (admin:rbac)]
            // 'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
            'class' => 'yongtiger\admin\components\DbManager',
            'cache' => 'cache',

            "defaultRoles" => ["guest"],    ///[yii2-brainbase v0.3.0 (admin:defaultRoles)]
        ],
        ///[http://www.brainbook.cc]

    ],

    ///[yii2-brainbase v0.3.0 (admin:rbac)]
    'as access' => [
        'class' => 'yongtiger\admin\components\AccessControl',

        ///Here is the action that allows everyone (including guests) to visit
        'allowActions' => [
            //'some-controller/some-action',

            ///[yii2-brainbase v0.3.0 (admin:rbac):fix Yii debug disappear] @see https://github.com/mdmsoft/yii2-admin/issues/219
            'debug/*',
            'error/*',
            ///[Yii2 Brainbase v0.7.2 (yongtiger\admin\components\AccessControl\allowActions:'user/security/captcha')]
            'user/security/captcha',

            // 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
            ///'admin/*',

            // '*' means to allow all users (including guests). Note: After setting RBAC commented out!
            // '*'
        ]
    ],
    ///[http://www.brainbook.cc]

];
