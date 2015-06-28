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
 * @Tests App _Config [Functional].
 * @since 1.0
 */

$_SERVER['SCRIPT_FILENAME'] = YII_TEST_ENTRY_FILE;
$_SERVER['SCRIPT_NAME']     = YII_TEST_ENTRY_URL;

return yii\helpers\ArrayHelper::merge(
    require(__DIR__.'/../_app/config/web.php'),
    [
        'aliases' => [
            '@tests/codeception/config'       => '@tests/codeception/_config'
        ],
    ]
);