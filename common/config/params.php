<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',

    ///[yii2-brainbase v0.0.0 (initial commit)]
    ///`serviceEmail` usually used for the system to automatically send mail.
    ///Note: Make sure that the mail sender must be a mailbox corresponding to SMTP! Please refer to `\common\config\main-local.php` in the mailer settings.
    'serviceEmail' => 'service@example.com',

    'yii2-brainbase-email' => 'brainbook.cc@outlook.com',  ///yii2-brainbase contact email (Note: Not admin email!)
    'yii2-brainbase-name' => 'yii2-brainbase',    ///yii2-brainbase name
    'yii2-brainbase-version' => '1.0.0',           ///yii2-brainbase version
    'yii2-brainbase-build' => '201610012344',      ///yii2-brainbase build version
    'yii2-brainbase-copyright-url' => 'http://www.brainbook.cc',   ///yii2-brainbase copyright and support site url (Note: Not admin email!)
    'yii2-brainbase-copyright-name' => 'brainbook.cc',             ///yii2-brainbase copyright and support site name
    'yii2-brainbase-github-url' => 'https://github.com/yongtiger/yii2-brainbase',    ///yii2-brainbase GitHub url

    'user.passwordResetTokenExpire' => 3600,

    ///[yii2-brainbase v0.3.0 (admin:rbac):fix Added multi app (frontend/backend)]@see https://github.com/mdmsoft/yii2-admin/pull/309/
    ///Optional. `'yongtiger.admin.configs'=>'advanced'` will overrides 'yongtiger.application.remoteAppConfigs' as below.
    'yongtiger.admin.configs' => [
        'log' => [  ///[2.7.2 (CHG# yongtiger.admin.configs:log)]
            // 'app-backend',
            // 'app-frontend',
        ],
        // 'advanced' => [
        //     'app-backend' => [
        //         'class' => 'backend\\components\\Application',
        //         '@common/config/main.php',
        //         '@common/config/main-local.php',
        //         '@backend/config/main.php',
        //         '@backend/config/main-local.php',
        //     ],
        //     'app-frontend' => [
        //         'class' => 'frontend\\components\\Application',
        //         '@common/config/main.php',
        //         '@common/config/main-local.php',
        //         '@frontend/config/main.php',
        //         '@frontend/config/main-local.php',
        //     ],
        // ],
    ],

    ///[v0.12.2 (CHG# yongtiger\application\Application::remoteAppCall)]
	'yongtiger.application.remoteAppConfigs' => [
        'app-backend' => [
            'class' => 'backend\\components\\Application',  ///if omitted, `yongtiger\application\Application` will be used.
            '@common/config/main.php',
            '@common/config/main-local.php',
            '@backend/config/main.php',
            '@backend/config/main-local.php',
        ],
        'app-frontend' => [
            'class' => 'frontend\\components\\Application', ///if omitted, `yongtiger\application\Application` will be used.
            '@common/config/main.php',
            '@common/config/main-local.php',
            '@frontend/config/main.php',
            '@frontend/config/main-local.php',
        ],
    ],
];
