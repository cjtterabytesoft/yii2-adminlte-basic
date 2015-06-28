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
 * @Tests App Functional [HomeCept].
 * @since 1.0
 */

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that home page works');

$I->amOnPage(Yii::$app->homeUrl);

$I->see(yii::$app->params['WebName']);
$I->seeLink(yii::t('adminlte', 'About Us'));
$I->click(yii::t('adminlte', 'About Us'));
$I->see(yii::t('adminlte', 'This is the About page. You may modify the following file to customize its content:'), 'div');