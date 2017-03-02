<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,

    ///[yii2-brainbase v0.0.0 (initial commit)]
    ///`serviceEmail` usually used for the system to automatically send mail.
    ///Note: Make sure that the mail sender must be a mailbox corresponding to SMTP! Please refer to `\common\config\main-local.php` in the mailer settings.
    'serviceEmail' => 'service@example.com',

    ///[yii2-brainbase v0.3.0 (admin:rbac):fix Added multi app (frontend/backend)]@see https://github.com/mdmsoft/yii2-admin/pull/309/
	'yongtiger.admin.configs' => [
        'advanced' => [
            'app-backend' => [
                '@common/config/main.php',
                '@common/config/main-local.php',
                '@backend/config/main.php',
                '@backend/config/main-local.php',
            ],
            'app-frontend' => [
                '@common/config/main.php',
                '@common/config/main-local.php',
                '@frontend/config/main.php',
                '@frontend/config/main-local.php',
            ],
        ],
    ],
];
