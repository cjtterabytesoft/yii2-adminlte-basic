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
* @Tests App Unit Models [ContactFormTest].
* @since 1.0
*/

namespace cjtterabytesoft\adminlte\basic\tests\codeception\unit\models;

use Yii;
use yii\codeception\TestCase;
use Codeception\Specify;
use cjtterabytesoft\adminlte\basic\models\ContactForm;

class ContactFormTest extends TestCase
{
    use Specify;

    protected function setUp()
    {
        parent::setUp();
        Yii::$app->mailer->fileTransportCallback = function ($mailer, $message) {
            return 'testing_message.eml';
        };
    }

    protected function tearDown()
    {
        unlink($this->getMessageFile());
        parent::tearDown();
    }

    public function testContact()
    {
        $model = new ContactForm();
        $model->attributes = [
            'name' => 'Tester',
            'email' => 'tester@example.com',
            'subject' => 'very important letter subject',
            'body' => 'body of current message',
        ];
        $model->sendEmail('admin@example.com');
        $this->specify('email should be send', function () {
            expect('email file should exist', file_exists($this->getMessageFile()))->true();
        });
        $this->specify('message should contain correct data', function () use ($model) {
            $emailMessage = file_get_contents($this->getMessageFile());
            expect('email should contain user name', $emailMessage)->contains($model->name);
            expect('email should contain sender email', $emailMessage)->contains($model->email);
            expect('email should contain subject', $emailMessage)->contains($model->subject);
            expect('email should contain body', $emailMessage)->contains($model->body);
        });
    }

    private function getMessageFile()
    {
        return Yii::getAlias(Yii::$app->mailer->fileTransportPath) . '/testing_message.eml';
    }

}