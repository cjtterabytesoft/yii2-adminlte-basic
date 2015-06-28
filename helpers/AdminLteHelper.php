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
 * @Helper App [AdminLteHelper].
 * @since 1.0
 */

namespace cjtterabytesoft\adminlte\basic\helpers;

use yii;
use yii\helpers\Html;

class AdminLteHelper
{
    /**
     * Display Link Yii2 Oficial Page.
     */

    public static function powered()
    {
        return html::label('Powered by ') . Html::a(' Yii Framework', 'http://www.yiiframework.com/', ['class' => 'a', 'target' => '_blank', 'rel' => 'external']);
    }
}