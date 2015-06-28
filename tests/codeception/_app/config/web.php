<?php

/*
 * This file is part of the Terabyte yii2-extension.
 *
 * (c) Terabyte yii2-extension <http://github.com/tecnologiaterabyte>
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
 * @link http://www.tecnologiaterabyte.com
 * @author Wilmer Arámbula <tecnologiaterabyte@gmail.com>
 * @copyright (c) 2014 Asoc. Coop. Tecnologia Terabyte 124, RL.
 * @Extension: [yii2-adminlte].
 * @Tests App Config [Web].
 * @since 1.0
 */

$config = [
    'id'        => 'yii2-adminlte-basic-test',
    'basePath'  => dirname(__DIR__),
    'bootstrap' => [
        'cjtterabytesoft\adminlte\basic\Bootstrap',
    ],
    'extensions' => require(VENDOR_DIR . '/yiisoft/extensions.php'),
    'aliases' => [
        '@cjtterabytesoft/adminlte/basic' => realpath(__DIR__.'/../../../../'),
        '@vendor'                         => VENDOR_DIR,
        '@bower'                          => VENDOR_DIR.'/bower',
    ],
    'components' => [
        'assetManager' => [
            'basePath' => __DIR__ . '/../assets',
        ],
        'log'   => null,
        'cache' => null,
        'user' => [
            'identityClass' => 'cjtterabytesoft\adminlte\basic\models\User',
            'enableAutoLogin' => true,
        ],
        'request' => [
            'enableCsrfValidation'   => false,
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'testkey',
        ],
        'db' => require __DIR__.'/db.php',
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
    ],
    'controllerMap' => [
        'site' => [
            'class' => 'cjtterabytesoft\adminlte\basic\controllers\SiteController',
        ],
    ],
];

return $config;