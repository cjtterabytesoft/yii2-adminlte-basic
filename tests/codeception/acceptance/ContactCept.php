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
 * @Themes: Tests Acceptance [ContactCept].
 * @since 1.0
 */

use cjtterabytesoft\adminlte\basic\tests\codeception\_pages\ContactPage;

/* @var $scenario Codeception\Scenario */

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that contact works');

$contactPage = ContactPage::openBy($I);

$I->see(yii::t('adminlte', 'Contact'), 'div');

$I->amGoingTo('submit contact form with no data');
$contactPage->submit([]);
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->expectTo('see validations errors');
$I->see(yii::t('adminlte', 'Contact'), 'div');
$I->see(yii::t('adminlte', 'Name cannot be blank.'), '.help-block');
$I->see(yii::t('adminlte', 'Email cannot be blank.'), '.help-block');
$I->see(yii::t('adminlte', 'Subject cannot be blank.'), '.help-block');
$I->see(yii::t('adminlte', 'Body cannot be blank.'), '.help-block');
$I->see(yii::t('adminlte', 'The verification code is incorrect.'), '.help-block');

$I->amGoingTo('submit contact form with not correct email');
$contactPage->submit([
    'name' => 'tester',
    'email' => 'tester.email',
    'subject' => 'test subject',
    'body' => 'test content',
    'verifyCode' => 'testme',
]);
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->expectTo('see that email adress is wrong');
$I->dontSee(yii::t('adminlte', 'Name cannot be blank.'), '.help-block');
$I->see(yii::t('adminlte', 'Email is not a valid email address.'), '.help-block');
$I->dontSee(yii::t('adminlte', 'Subject cannot be blank.'), '.help-block');
$I->dontSee(yii::t('adminlte', 'Body cannot be blank.'), '.help-block');
$I->dontSee(yii::t('adminlte', 'The verification code is incorrect.'), '.help-block');

$I->amGoingTo('submit contact form with correct data');
$contactPage->submit([
    'name' => 'tester',
    'email' => 'tester@example.com',
    'subject' => 'test subject',
    'body' => 'test content',
    'verifyCode' => 'testme',
]);
if (method_exists($I, 'wait')) {
    $I->wait(3); // only for selenium
}
$I->see( yii::t('adminlte', 'Thank you for contacting us. We will respond to you as soon as possible.'));