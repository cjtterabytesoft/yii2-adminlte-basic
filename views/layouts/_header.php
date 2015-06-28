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
 * @Views App Layouts [_header].
 * @since 1.0
 */

use yii\helpers\Html;

?>

<?= Html::beginTag('header', ['class' => 'main-header']) ?>
    <!-- Add the class icon to your logo image or logo icon to add the margining -->
    <?= Html::a(\yii::$app->params['WebName'], \Yii::$app->homeUrl, ['class' => 'logo']) ?>
    <!-- Header Navbar: style can be found in header.less -->
    <?= Html::beginTag('nav', ['class' => 'navbar navbar-static-top', 'role' => 'navigation']) ?>
        <?php if (!Yii::$app->user->isGuest): ?>
            <!-- Sidebar toggle button-->
            <?= Html::a(html::tag('span', 'Toggle navigation', ['class' => 'sr-only']) .
                Html::tag('span', '', ['class' => 'icon-bar']) . Html::tag('span', '', ['class' => 'icon-bar'])
                ,'#', ['class' => 'sidebar-toggle', 'data-toggle'=>'offcanvas','role'=>'button'])
            ?>
            <?= Html::beginTag('div', ['class' => 'navbar-custom-menu']) ?>
                <!-- User Account: style can be found in dropdown.less -->
                <?= $this->render('_menuser') ?>
            <?= Html::endTag('div') ?>
            <?php else: ?>
                <?= Html::beginTag('div', ['class' => 'navbar-custom-menu']) ?>
                    <?= $this->render('_menu') ?>
                <?= Html::endTag('div') ?>
        <?php endif; ?>
    <?= Html::endTag('nav') ?>
<?= Html::endTag('header') ?>