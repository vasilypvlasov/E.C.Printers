<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'language'=>'uk-UA',
    'name'=>'" Навчальний комплекс "Принтери""',
    'vendorPath' => dirname(__DIR__) . '/../vendor',
    'basePath' => dirname(__DIR__).'',
    'bootstrap' => ['log'],
    'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
    'components' => [

        'user' => [
            'identityClass' => 'app\models\User', 
            'enableAutoLogin' => true,
            'loginUrl' => ['user/login'],
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mail' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
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
        'db' => $db,
    ],
    'modules' => [
        'catalog' => [
            'class' => 'app\modules\catalog\Module',
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] =  [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['*.*.*.*'],
    ];
}

return $config;
