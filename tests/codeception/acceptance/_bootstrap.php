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
* @Tests App Acceptance [_bootstrap].
* @since 1.0
*/

new yii\web\Application(require(dirname(__DIR__) . '/_config/acceptance.php'));
