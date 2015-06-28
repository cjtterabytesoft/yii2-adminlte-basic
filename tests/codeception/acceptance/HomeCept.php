<?php

/*
 * This file is part of the Cjt Terabyte LLC [yii2-extension].
 *
 * (c) Cjt Terabyte LLC [yii2-extension] <http://github.com/cjtterabytesoft>.
 * For the full copyright and license information, please view the LICENSE.md.
 * file that was distributed with this source code.
 *
 * @link http://www.cjtterabyte.com.
 * @author Wilmer Arámbula <cjtterabytellc@gmail.com>.
 * @copyright (c) 2015 Cjt Terabyte LLC.
 * @Extension: [yii2-adminlte-basic].
 * @Themes: Tests Acceptance [HomeCept].
 * @since 1.0
 */

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that home page works');

$I->amOnPage(Yii::$app->homeUrl);

$I->see(yii::$app->params['WebName']);
$I->seeLink(yii::t('adminlte', 'About Us'));
$I->click(yii::t('adminlte', 'About Us'));
$I->see(yii::t('adminlte', 'This is the About page. You may modify the following file to customize its content:'));
