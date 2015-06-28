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
* @Tests App _Pages [LoginPage].
* @since 1.0
*/

namespace cjtterabytesoft\adminlte\basic\tests\codeception\_pages;

use yii\codeception\BasePage;

/**
 * Represents login page
 * @property \AcceptanceTester|\FunctionalTester $actor
 */

class LoginPage extends BasePage
{
    public $route = 'site/login';

    /**
     * @param string $username
     * @param string $password
     */
    public function login($username, $password)
    {
        $this->actor->fillField('input[name="LoginForm[username]"]', $username);
        $this->actor->fillField('input[name="LoginForm[password]"]', $password);
        $this->actor->click('login-button');
    }
}