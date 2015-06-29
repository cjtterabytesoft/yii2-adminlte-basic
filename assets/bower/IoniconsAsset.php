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
 * @Assets App [IoniconsAsset].
 * @since 1.0
 */

namespace cjtterabytesoft\adminlte\basic\assets\bower;

use yii\web\AssetBundle;

class IoniconsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/ionicons';

    public $css = [
        'css/ionicons.css',
    ];

    public function init()
    {
        parent::init();
        $this->publishOptions['beforeCopy'] = function ($from) {
            $publish = false;
            $dirname = basename($from);
            $parentFolder = basename(dirname($from));
            if (
                ($dirname === 'css' or $dirname === 'fonts') or
                ($parentFolder === 'css' or $parentFolder === 'fonts')
            ) {
                $publish = true;
            }
            return $publish;
        };
    }
}