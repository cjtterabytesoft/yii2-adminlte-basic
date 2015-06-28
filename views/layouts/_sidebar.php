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
 * @Views App Layouts [_sidebar].
 * @since 1.0
 */

use yii\helpers\Html;
use cjtterabytesoft\adminlte\basic\widgets\MainSidebar;

$sidebar_menu[0] = ['label' => Yii::t('adminlte', 'Panel de Control'), 'options' => ['class' => 'header'], 'template' => '{label}'];
$sidebar_menu[1] = ['label' => Yii::t('adminlte', 'Home'), 'icon' => Html::tag('i', '', ['class' => 'fa ion-ios-home fa-lg']), 'url' => ['/site/index']];

echo MainSidebar::widget([
    'options'         => ['class' => 'sidebar-menu'],
    'labelTemplate'   => '<a href="#">{icon}<span>{label}</span>{right-icon}{badge}</a>',
    'linkTemplate'    => '<a href="{url}" {linkOptions}>{icon}<span>{label}</span>{right-icon}{badge}</a>',
    'submenuTemplate' => "\n<ul class=\"treeview-menu\">\n{items}\n</ul>\n",
    'activateParents' => true,
    'items'           => $sidebar_menu,
]);