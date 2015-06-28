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
 * @Views App Site [login].
 * @since 1.0
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model cjtterabytesoft\adminlte\basic\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = Yii::t('adminlte',$this->title);

?>

<?= Html::beginTag('div', ['class' => 'form-box', 'id' => 'site-login-frontend']) ?>
    <?= Html::beginTag('div', ['class' => 'header']) ?>
        <?= html::tag('h3', Html::encode(Yii::t('adminlte',$this->title)), ['class' => 'panel-title-custom']) ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'body bg-gray']) ?>
        <?php $form = ActiveForm::begin([
            'id' => 'form-site-login-frontend',
        ]) ?>

            <?= $form->field($model, 'username', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control',
                'tabindex' => '1']])->label(Yii::t('adminlte', 'Username')) ?>

            <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']])
                ->passwordInput()->label(Yii::t('adminlte', 'Password')) ?>

            <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '4'])->label(Yii::t('adminlte', 'rememberMe')) ?>

            <?= Html::beginTag('div', ['class' => 'footer']) ?>
                <?= Html::submitButton(Yii::t('adminlte', 'Login'), ['class' => 'btn bg-black btn-block', 'tabindex' => '3',
                    'name' => 'login-button']) ?>
            <?= Html::endTag('div') ?>

        <?php ActiveForm::end(); ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>