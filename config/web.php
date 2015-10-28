<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'name' => "Yii2 basic webapp",
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    // default language spanish
    'language' => 'es',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'XFYe6SVN-SAc4X4YkXWsmVGkufy5UPvv',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'showScriptName' => false,
            'enablePrettyUrl' => true,
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'mailer' => require(__DIR__ . '/mailer.php'),
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                // log by Filesystem
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
                // log by Syslog
                [
                    'class' => 'yii\log\SyslogTarget',
                    'levels' => ['error', 'warning'],
                ],
                // log by Email
                [
                    'class' => 'yii\log\EmailTarget',
                    'mailer' =>'mailer',
                    'levels' => ['error', 'warning'],
                    'message' => [
                        'from' => [$params['adminEmail']],
                        'to' => ['TO_MAIL_ACCOUNT@example.com'],
                        //'subject' => 'ERROR log from yii2 basic webapp',
                        'subject' => sprintf('[%s] Application Log', $_SERVER['SERVER_NAME'])
                    ],
                    'except' => [
                        //'yii\web\HttpException:404',
                        //'yii\web\HttpException:403',
                    ],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
