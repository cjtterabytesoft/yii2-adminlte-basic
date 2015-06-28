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
* @Tests App _Pages [ContactPage].
* @since 1.0
*/

namespace cjtterabytesoft\adminlte\basic\tests\codeception\_pages;

use yii\codeception\BasePage;

/**
 * Represents contact page
 * @property \AcceptanceTester|\FunctionalTester $actor
 */

class ContactPage extends BasePage
{
    public $route = 'site/contact';

    /**
     * @param array $contactData
     */
    public function submit(array $contactData)
    {
        foreach ($contactData as $field => $value) {
            $inputType = $field === 'body' ? 'textarea' : 'input';
            $this->actor->fillField($inputType . '[name="ContactForm[' . $field . ']"]', $value);
        }
        $this->actor->click('contact-button');
    }
}