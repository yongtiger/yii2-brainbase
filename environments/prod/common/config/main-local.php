<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            
            ///[yii2-brainbase v0.0.0 (initial commit)]
            'dsn' => 'mysql:host=localhost:3399;dbname=yii2-brainbase',
            'username' => 'yii2admin',
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
