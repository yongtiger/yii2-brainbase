<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',

    ///[yii2-brainbase v0.0.0 (initial commit)]
    ///`serviceEmail` usually used for the system to automatically send mail.
    ///Note: Make sure that the mail sender must be a mailbox corresponding to SMTP! Please refer to `\common\config\main-local.php` in the mailer settings.
    'serviceEmail' => 'service@example.com',

    ///[Yii2 Brainbase v0.20.1 (ADD# poweredBy)]
    'poweredByUrl' => 'http://www.brainbook.cc',     ///powered by Yii2 application url
    'poweredByName' => 'yii2-brainbase',     ///powered by Yii2 application name
    'poweredByVersion' => '1.0.0',           ///powered by Yii2 application version
    'poweredByBuild' => '201610012344',      ///powered by Yii2 application build version
    'poweredBySourceLabel' => '<a href="https://github.com/yongtiger/yii2-brainbase" target="_blank">[git]</a>',    ///powered by source code label, e.g. github url
    'poweredByEmail' => 'brainbook.cc@outlook.com',  ///powered by contact email (Note: Not admin email!)
    'CopyrightLabel' => '<a href="http://www.brainbook.cc" target="_blank">brainbook.cc</a>',   ///copyright site label
    
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
