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
 * @Tests App Functional [LoginCept].
 * @since 1.0
 */

use cjtterabytesoft\adminlte\basic\tests\codeception\_pages\LoginPage;

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('ensure login page works');

$loginPage = LoginPage::openBy($I);

$I->amGoingTo('submit login form with no data');
$loginPage->login('', '');
$I->expectTo('see validations errors');
$I->see(yii::t('adminlte', 'Username cannot be blank.'), '.help-block');
$I->see(yii::t('adminlte', 'Password cannot be blank.'), '.help-block');

$I->amGoingTo('try to login with wrong credentials');
$I->expectTo('see validations errors');
$loginPage->login('admin', 'wrong');
$I->expectTo('see validations errors');
$I->see(yii::t('adminlte', 'Incorrect username or password.'), '.help-block');

$I->amGoingTo('try to login with correct credentials');
$loginPage->login('admin', 'admin');
$I->expectTo('see that user is logged');
$I->click('admin', '.dropdown');
$I->dontSeeLink('Login');
$I->dontSeeLink('Signup');
$I->dontSeeLink('Login');
$I->seeLink('Logout');