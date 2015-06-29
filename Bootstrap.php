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
 * @Configuration App [Bootstrap].
 * @since 1.0
 */

namespace cjtterabytesoft\adminlte\basic;

use Yii;
use yii\base\BootstrapInterface;
use yii\i18n\PhpMessageSource;

class Bootstrap implements BootstrapInterface
{
    /** @inheritdoc */
    public function bootstrap($app)
    {
        /* Config Language */
        if (!isset($app->language)) {
            $app->language = 'es';
        }
        /* Config Translation */
        if (!isset($app->get('i18n')->translations['adminlte*'])) {
            $app->get('i18n')->translations['adminlte*'] = [
                'class'    => PhpMessageSource::className(),
                'basePath' => __DIR__ . '/messages',
            ];
        }
        /* Config Theme */
        if (!isset($app->view->theme)) {
            $app->view->theme = new \yii\base\Theme([
                'pathMap' => [
                    '@app/views/layouts' => '@cjtterabytesoft/adminlte/basic/views/layouts',
                    '@app/views/site' => '@cjtterabytesoft/adminlte/basic/views/site',
                ],
            ]);
        }
        /* Copy Avatar Images */
        if (\yii\helpers\BaseFileHelper::filterPath(\Yii::getAlias('@app/web/images'), $options = [])) {
            \yii\helpers\BaseFileHelper::copyDirectory(\Yii::getAlias('@cjtterabytesoft/adminlte/basic/images/'), \Yii::getAlias('@app/web/images'));
        }
        /* Config Params */
        if (!isset($app->params['adminEmail'])) {
            $app->params['adminEmail'] = 'admin@example.com';
        }
        if (!isset($app->params['AdminLTESkin'])) {
            $app->params['AdminLTESkin'] = 'skin-yellow';
        }
        if (!isset($app->params['Author'])) {
            $app->params['Author'] = '2015 - Wilmer Arambula';
        }
        if (!isset($app->params['Facebook_Account'])) {
            $app->params['Facebook_Account'] = 'https://www.facebook.com/username';
        }
        if (!isset($app->params['Google_Account'])) {
            $app->params['Google_Account'] = 'https://www.google.com/+username';
        }
        if (!isset($app->params['Linkedin_Account'])) {
            $app->params['Linkedin_Account'] = 'https://www.linkedin.com/in/username';
        }
        if (!isset($app->params['Twitter_Account'])) {
            $app->params['Twitter_Account'] = 'https://twitter.com/username';
        }
        if (!isset($app->params['WebName'])) {
            $app->params['WebName'] = 'My Application';
        }
        if (!YII_ENV_TEST) {
            if (!isset($app->params['imagesurl_30'])) {
                $app->params['imagesurl_30'] = 'http://www.basic.tk/images/avatar/profile/30/icon-avatar.png';
            }
            if (!isset($app->params['imagesurl_60'])) {
                $app->params['imagesurl_60'] = 'http://www.basic.tk/images/avatar/profile/60/icon-avatar.png';
            }
            } else {
                if (!isset($app->params['imagesurl_30'])) {
                    $app->params['imagesurl_30'] = 'http://localhost.basic/images/avatar/profile/30/icon-avatar.png';
                }
                if (!isset($app->params['imagesurl_60'])) {
                    $app->params['imagesurl_60'] = 'http://localhost.basic/images/avatar/profile/60/icon-avatar.png';
                }
        }
    }
}