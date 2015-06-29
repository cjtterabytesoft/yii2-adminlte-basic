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
 * @Views App Layouts [main].
 * @since 1.0
 */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use cjtterabytesoft\adminlte\basic\widgets\Alert;
use cjtterabytesoft\adminlte\basic\assets\themes\AdminLTE\AdminLTEAsset;
use cjtterabytesoft\adminlte\basic\assets\themes\AdminLTE\AppAssetAdminLTE;


/* @var $this \yii\web\View */
/* @var $content string */

AdminLTEAsset::register($this);
AppAssetAdminLTE::register($this);

?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <?= Html::beginTag('html', ['lang' => Yii::$app->language]) ?>
        <?= Html::beginTag('head') ?>
            <?= Html::tag('meta', '', ['charset' => Yii::$app->charset]) ?>
            <?= Html::tag('meta', '', ['content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no', 'name' => 'viewport']) ?>
            <?= Html::csrfMetaTags() ?>
            <?= Html::tag('title', Html::encode(Yii::t('adminlte',$this->title))) ?>
            <!-- Theme style -->
            <?php $this->head() ?>
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <?= Html::tag('script', '', ['src' => 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js']) ?>
            <?= Html::tag('script', '', ['src' => 'https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js']) ?>
            <![endif]-->
        <?= Html::endTag('head') ?>
        <?php $this->beginBody() ?>
            <?= Html::begintag('body', ['class' => (!Yii::$app->user->isGuest) ? \yii::$app->params['AdminLTESkin']
                : \yii::$app->params['AdminLTESkin'] . ' sidebar-collapse sidebar-open']) ?>
                <?= Html::beginTag('div', ['class' => 'wrapper']) ?>
                    <!-- header logo: style can be found in header.less -->
                    <?= $this->render('_header') ?>
                    <!-- Left side column. contains the logo and sidebar -->
                    <?php if (!Yii::$app->user->isGuest): ?>
                        <?= Html::beginTag('aside', ['class' => 'main-sidebar']) ?>
                            <!-- sidebar: style can be found in sidebar.less -->
                            <?= Html::beginTag('section', ['class' => 'sidebar']) ?>
                                <!-- Sidebar user panel -->
                                <?= $this->render('_userpanel') ?>
                                <!-- ./Sidebar user panel -->
                                <?= $this->render('_sidebar') ?>
                            <?= Html::endTag('section') ?>
                            <!-- /.sidebar -->
                        <?= Html::endTag('aside') ?>
                        <!-- ./Left side column. -->
                        <!-- Right side column. Contains the navbar and content of the page -->
                        <!-- Navigation -->
                        <?= Html::beginTag('div', ['class' => 'content-wrapper']) ?>
                            <?= Html::beginTag('section', ['class' => 'content-header']) ?>
                                <!-- Content Header (Page header) -->
                                <?= Html::beginTag('div') ?>
                                    <?= Breadcrumbs::widget([
                                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                    ]) ?>
                                <?= Html::endTag('div') ?>
                            <?= Html::endTag('section') ?>
                            <?= Html::beginTag('section', ['class' => 'content']) ?>
                                <!-- Main content -->
                                <?= $content ?>
                                <?= Alert::widget() ?>
                            <?= Html::endTag('section') ?>
                            <!-- /.content -->
                        <?= Html::endTag('div') ?>
                        <!-- /.right-side -->
                        <?php else: ?>
                            <!-- ./Left side column. -->
                            <!-- Right side column. Contains the navbar and content of the page -->
                            <!-- Navigation -->
                            <?= Html::beginTag('div', ['class' => 'content-wrapper']) ?>
                                <?= Html::beginTag('section', ['class' => 'content-header']) ?>
                                    <?= Html::beginTag('div', ['class' => 'container']) ?>
                                        <?= Breadcrumbs::widget([
                                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                        ]) ?>
                                    <?= Html::endTag('div') ?>
                                <?= Html::endTag('section') ?>
                                <?= Html::beginTag('section', ['class' => 'content']) ?>
                                    <!-- Main content -->
                                    <?= Html::beginTag('div', ['class' => 'container']) ?>
                                        <?= $content ?>
                                        <?= Alert::widget() ?>
                                    <?= Html::endTag('div') ?>
                                <?= Html::endTag('section') ?>
                            <?= Html::endTag('div') ?>
                    <?php endif; ?>
                    <!-- ./Right side column. -->
                    <?= $this->render('_footer') ?>
                <?= Html::endTag('div') ?>
            <?= Html::endTag('body') ?>
        <?php $this->endBody() ?>
    <?= Html::endTag('html') ?>
<?php $this->endPage();