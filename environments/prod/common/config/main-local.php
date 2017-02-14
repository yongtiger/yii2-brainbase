<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            
            ///[yii2-brainbase v0.0.0 (initial commit)]
            'dsn' => 'mysql:host=localhost;dbname=yii2brainbase',
            'username' => 'yii2root',
            'password' => '123456',
            ///[http://www.brainbook.cc]

            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
