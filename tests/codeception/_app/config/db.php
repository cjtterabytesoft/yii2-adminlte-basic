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
 * @Tests App Config [Db].
 * @since 1.0
 */

$db = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2_basic_tests',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];

if (file_exists(__DIR__ . '/db.local.php')) {
    $db = array_merge($db, require(__DIR__ . '/db.local.php'));
}

return $db;