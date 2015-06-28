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
 * @Assets App [AppAssetAdminLTE].
 * @since 1.0
 */

namespace cjtterabytesoft\adminlte\basic\assets\themes\AdminLTE;

use yii\web\AssetBundle;

class AppAssetAdminLTE extends AssetBundle
{
    public $sourcePath = '@cjtterabytesoft/adminlte/basic/assets/themes/AdminLTE';

    public $css = [
        'css/site-adminlte.css',
    ];

    public $js = [
        'js/site-custom.js',
    ];

    public function init()
    {
        parent::init();
        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            $publish = false;
            $dirname = basename($from);
            $parentFolder = basename(dirname($from));
            if (
                ($dirname === 'css' || $dirname === 'js') or
                ($parentFolder === 'css' || $parentFolder === 'js')
            ) {
                $publish = true;
            }
            return $publish;
        };
    }
}