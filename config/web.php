<?php
<<<<<<< HEAD
    $params = require __DIR__ . '/params.php';
    $db = require __DIR__ . '/db.php';
    $config = [
=======

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
<<<<<<< HEAD
    '@bower' => '@vendor/bower-asset',
    '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'wellness' => [
        'class' => 'app\modules\wellness\Wellness',
        ],
        'induccion' => [
        'class' => 'app\modules\induccion\Induccion',
        ],
        'desempenio' => [
        'class' => 'app\modules\desempenio\Desempenio',
        ],
        'beneficios' => [
        'class' => 'app\modules\beneficios\Beneficios',
        ],
        'aprendizaje' => [
        'class' => 'app\modules\aprendizaje\Aprendizaje',
        ],
        'redactor' => 'yii\redactor\RedactorModule',
        'class' => 'yii\redactor\RedactorModule',
        'uploadDir' => '@webroot/uploads',
        'uploadUrl' => '/hello/uploads',
            'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => TRUE,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['admin']
            ],   
    ],
    'language' => 'es',
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user'
                ],
            ],
        ],    
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'google' => [
                'class'        => 'dektrium\user\clients\Google',
        'clientId'     => '879294431766-pdokshv4838l5gd029inl084guht36hf.apps.googleusercontent.com',
                'clientSecret' => 'DcqJF8Zp55TUmh19YGJA3Zuf',
            ],
        ],
    ],
    'formatter' => [
        'dateFormat' => 'dd-MM-yyyy'
    ],
    'request' => [
                // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => 'Qtqou29zH67aIc2CCVepU1E6GTKlXxoI',
    ],
        'cache' => [
        'class' => 'yii\caching\FileCache',
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
        'useFileTransport' => false,
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
    'params' => $params,
    ];

    if (YII_ENV_DEV) {
        // configuration adjustments for 'dev' environment
        $config['bootstrap'][] = 'debug';
        $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
        ];

        $config['bootstrap'][] = 'gii';
        $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
        ];
    }

    return $config;
=======
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'wellness' => [
            'class' => 'app\modules\wellness\Wellness',
            ],
        'induccion' => [
            'class' => 'app\modules\induccion\Induccion',
        ],
        'desempenio' => [
            'class' => 'app\modules\desempenio\Desempenio',
        ],
        'beneficios' => [
            'class' => 'app\modules\beneficios\Beneficios',
        ],
        'aprendizaje' => [
            'class' => 'app\modules\aprendizaje\Aprendizaje',
        ],
        ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Qtqou29zH67aIc2CCVepU1E6GTKlXxoI',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
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
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
>>>>>>> 9a7dc542a1b16654dd704bc5cdfa34d4bd6f407d
