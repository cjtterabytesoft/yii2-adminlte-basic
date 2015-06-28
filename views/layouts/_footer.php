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
 * @Views App Layouts [_footer].
 * @since 1.0
 */

use yii\helpers\Html;
use cjtterabytesoft\adminlte\basic\helpers\AdminLteHelper;

?>

<?= Html::beginTag('footer', ['class' => 'main-footer']) ?>
    <?= Html::beginTag('div', ['class' => 'footer-adminlte']) ?>
        <?= Html::beginTag('div', ['class' => 'row']) ?>
            <?= Html::beginTag('div', ['class' => 'box-body']) ?>
                <?= Html::beginTag('div', ['class' => 'col-xs-4']) ?>
                    <?= Html::beginTag('p', ['class' => 'pull-left']) ?>
                        <?= html::tag('span', 'Copyrigth:&nbsp' ) ?>
                        <?= html::tag('span', '', ['class' => 'fa fa-copyright fa-2x', 'style' => 'vertical-align:middle']) ?>
                        <?= html::tag('span', '&nbsp' . \yii::$app->params['Author'], ['style' => 'vertical-align:middle']) ?>
                    <?= Html::endTag('p') ?>
                <?= Html::endTag('div') ?>
                <?= Html::beginTag('div', ['class' => 'col-xs-4']) ?>
                    <?= AdminLteHelper::powered() ?>
                    <?= html::tag('span', '', ['class' => 'logo-yii', 'style' => 'vertical-align: middle; padding-left:8px']) ?>
                    <?= html::tag('span', '', ['class' => 'ion-social-html5 fa-2x', 'style' => 'vertical-align: middle; padding-left:8px']) ?>
                    <?= html::tag('span', '', ['class' => 'ion-social-css3 fa-2x', 'style' => 'vertical-align: middle; padding-left:8px']) ?>
                <?= Html::endTag('div') ?>
                <?= Html::beginTag('div', ['class' => 'col-xs-4']) ?>
                    <?= Html::beginTag('p', ['class' => 'pull-right']) ?>
                        <?= html::tag('span', Yii::t('adminlte', 'Social Networks:'), ['style' => 'padding-right: 10px']) ?>
                        <?= Html::a('', \yii::$app->params['Facebook_Account'], ['class' => 'iconos ion-social-facebook fa-2x', 'target' => '_blank']) ?>
                        <?= Html::a('', \yii::$app->params['Twitter_Account'], ['class' => 'iconos ion-social-twitter fa-2x', 'target' => '_blank']) ?>
                        <?= Html::a('', \yii::$app->params['Google_Account'], ['class' => 'iconos ion-social-googleplus fa-2x', 'target' => '_blank']) ?>
                        <?= Html::a('', \yii::$app->params['Linkedin_Account'], ['class' => 'iconos ion-social-linkedin  fa-2x', 'target' => '_blank']) ?>
                    <?= Html::endTag('p') ?>
                <?= Html::endTag('div') ?>
            <?= Html::endTag('div') ?>
        <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('footer') ?>