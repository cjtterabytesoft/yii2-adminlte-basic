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
* @Tests App Unit Models [LoginFormTest].
* @since 1.0
*/

namespace cjtterabytesoft\adminlte\basic\tests\codeception\unit\models;

use Yii;
use yii\codeception\TestCase;
use cjtterabytesoft\adminlte\basic\models\LoginForm;
use Codeception\Specify;

class LoginFormTest extends TestCase
{
    use Specify;

    protected function tearDown()
    {
        Yii::$app->user->logout();
        parent::tearDown();
    }

    public function testLoginNoUser()
    {
        $model = new LoginForm([
            'username' => 'not_existing_username',
            'password' => 'not_existing_password',
        ]);

        $this->specify('user should not be able to login, when there is no identity', function () use ($model) {
            expect('model should not login user', $model->login())->false();
            expect('user should not be logged in', Yii::$app->user->isGuest)->true();
        });
    }

    public function testLoginWrongPassword()
    {
        $model = new LoginForm([
            'username' => 'demo',
            'password' => 'wrong_password',
        ]);

        $this->specify('user should not be able to login with wrong password', function () use ($model) {
            expect('model should not login user', $model->login())->false();
            expect('error message should be set', $model->errors)->hasKey('password');
            expect('user should not be logged in', Yii::$app->user->isGuest)->true();
        });
    }

    public function testLoginCorrect()
    {
        $model = new LoginForm([
            'username' => 'demo',
            'password' => 'demo',
        ]);

        $this->specify('user should be able to login with correct credentials', function () use ($model) {
            expect('model should login user', $model->login())->true();
            expect('error message should not be set', $model->errors)->hasntKey('password');
            expect('user should be logged in', Yii::$app->user->isGuest)->false();
        });
    }

}