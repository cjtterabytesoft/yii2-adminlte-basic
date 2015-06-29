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
 * @Views App Layouts [_userpanel].
 * @since 1.0
 */

use yii\helpers\Html;

?>

<?= Html::beginTag('div', ['class' => 'user-panel']) ?>
    <?= Html::beginTag('div', ['class' => 'pull-left image']) ?>
        <?= html::img(\yii::$app->params['imagesurl_30'],
            $options = ['class' => 'img-rounded', 'aria-expanded' => 'false'])
        ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'pull-left info']) ?>
        <?= html::tag('p', \yii::$app->user->identity->username) ?>
            <?= Html::a(Html::tag('i', '', ['class' => 'fa fa-circle text-success']), '#') ?>
            <?= Html::tag('i', Yii::t('adminlte', 'On Line')) ?>
        <?= Html::endTag('P') ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div');