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
 * @Tests App Acceptance [LoginCept].
 * @since 1.0
 */

use cjtterabytesoft\adminlte\basic\tests\codeception\_pages\LoginPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure login page works');

$loginPage = LoginPage::openBy($I);

$I->amGoingTo('submit login form with no data');
$loginPage->login('', '');
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->expectTo('see validations errors');
$I->see(yii::t('adminlte', 'Username cannot be blank.'), '.help-block');
$I->see(yii::t('adminlte', 'Password cannot be blank.'), '.help-block');

$I->amGoingTo('try to login with wrong credentials');
$I->expectTo('see validations errors');
$loginPage->login('admin', 'wrong');
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->expectTo('see validations errors');
$I->see(yii::t('adminlte', 'Incorrect username or password.'), '.help-block');

$I->amGoingTo('try to login with correct credentials');
$loginPage->login('admin', 'admin');
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->expectTo('see that user is logged');
$I->seelink('admin', '#');
$I->click('admin', '.dropdown');
$I->dontSeeLink('Login');
$I->dontSeeLink('Signup');
$I->dontSeeLink('Login');
$I->seeLink('Logout');

/* Uncomment WebDriver Support
$I->click('Logout');
$I->see(yii::t('adminlte', 'Login')); */