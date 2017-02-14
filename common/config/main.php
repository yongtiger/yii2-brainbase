<?php
return [

    ///[yii2-brainbase v0.1.0 (i18n)]
    ///If commented out, the default language is `en-US`.
    ///If set to `en-US`, Yii will look for the translation file \app\ messages\en-US. If there is no `en-US` translation file, Yii will try to find the `en` translation file.
    ///Note: It is not recommended to comment out the language settings! Should be set to `en` or `zh-CN` or other languages, otherwise it will affect the brainbase `long text translation` function.
    // 'language' => 'en', ///[yii2-brainbase v0.1.0 (i18n)]long text translation
    'language' => 'zh-CN',

    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
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

    ],
];
