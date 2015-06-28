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
 * @Views App Layouts [_menuser].
 * @since 1.0
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;

$menuUser[] = ['label' => html::tag('i', '', ['class' => 'glyphicon glyphicon-user']) . \yii::$app->user->identity->username, 'options'=> ['class'=>'dropdown user user-menu'],
    'items' => [
        Html::tag('li',
            Html::img(\yii::getAlias('@imagesurl_60'), $options = ['class' => 'img-rounded'], ['aria-expanded' => 'false']) .
            Html::tag('p',
                \yii::$app->user->identity->username .
                html::tag('small', '&nbsp' . Yii::t('adminlte', 'Member Since:') . '&nbsp' . Yii::t('adminlte', '{0, date, MMMM dd, YYYY HH:mm}', \yii::$app->user->identity->created_at))
            ),['class' => 'user-header bg-light']),
        Html::tag('li',
            Html::tag('div',
                Html::a(Yii::t('adminlte', 'Logout'),['/site/logout'], ['class' => 'btn bg-black', 'data-method'=>'post'])
                ,['class' => 'pull-right'])
            ,['class' => 'user-footer'])
    ],
];

echo Nav::widget([
    'options' => ['class' => 'nav navbar-nav navbar-right user user-menu'],
    'items' => $menuUser,
    'encodeLabels'=>false,
]);