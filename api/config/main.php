<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'v1'=>[
            'class'=>'api\modules\v1\Module',
        ],
    ],
    'components' => [

        // cache
        /*'cache' => [
            // 'class' => 'yii\caching\FileCache',
            'class' => 'yii\redis\Cache',
            'redis' => [
                'class' => 'yii\redis\Connection',
                'hostname' => '127.0.0.1',
                'port' => 6379,
                'database' => 0,
            ],
        ],*/

        // redis
        'redis_local' => [
            'class' => 'yii\redis\Connection',
            'hostname' => '127.0.0.1',
            'port' => 6379,
            // 'password' => '',
            'database' => 0,
        ],

        // queue
        /*'queue' => [
            'class' => \yii\queue\redis\Queue::class,
            'redis' => 'redis', // 连接组件或它的配置
            'channel' => 'queue', // Queue channel key
        ],*/

        // mongodb
        'mongodb' => [
            'class' => 'yii\mongodb\Connection',
            'dsn' => 'mongodb://122.114.252.78:27017/test',
            'options' => [
                "username" => "admin",
                "password" => "admin2021abc"
            ]
        ],

        'request' => [
            'csrfParam' => '_csrf-api',
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-api',
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
            //'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller>/<action>' => '<controller>/<action>',

                // 调试
//                'GET <version>/getTestIndex' => '<version>/test/index',
//                [
//                    'pattern'  => '<version>/debug/<list:\w+>',
//                    'route'    => '<version>/test/debug',
//                    'defaults' => ['list' => true],
//                ],
            ],
        ],

    ],
    'params' => $params,
];
