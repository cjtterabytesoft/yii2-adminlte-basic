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
 * @Views App Site [about].
 * @since 1.0
 */

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'About Us';
$this->params['breadcrumbs'][] = Yii::t('adminlte',$this->title);

?>

<?= Html::beginTag('div', ['class' => 'box box-solid', 'id' => 'site-about']) ?>
    <?= Html::beginTag('div', ['class' => 'box-header']) ?>
        <?= Html::encode(Yii::t('adminlte', Yii::t('adminlte',$this->title))) ?>
    <?= Html::endTag('div') ?>
    <?= Html::beginTag('div', ['class' => 'box-body']) ?>
        <?= html::tag('p', '') ?>
        <?= html::tag('p', Yii::t('adminlte', 'This is the About page. You may modify the following file to customize its content:'), ['style' => '  text-align: justify;']) ?>
        <?= html::tag('p', '') ?>
        <?= html::tag('code',  __FILE__) ?>
        <?= html::tag('p', '') ?>
    <?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>