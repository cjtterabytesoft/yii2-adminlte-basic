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
 * @Tests App Config [Console].
 * @since 1.0
 */

return [
    'id' => 'yii2-adminlte-basic-test--console',
    'basePath' => dirname(__DIR__),
    'components' => [
        'log'   => null,
        'cache' => null,
        'db'    => require __DIR__.'/db.php',
    ],
];