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
 * @Assets App [AdminLTEAsset].
 * @since 1.0
 */

namespace cjtterabytesoft\adminlte\basic\assets\themes\AdminLTE;

use yii\web\AssetBundle;

class AdminLTEAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/admin-lte/dist';

    public $css = [
        'css/AdminLTE.css',
        'css/skins/_all-skins.css',
    ];

    public $js = [
        'js/app.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'cjtterabytesoft\adminlte\basic\assets\bower\IoniconsAsset',
        'cjtterabytesoft\adminlte\basic\assets\bower\FontAwesomeAsset',
        'cjtterabytesoft\adminlte\basic\assets\bower\BootboxAsset',
    ];

    public function init()
    {
        parent::init();
        $this->publishOptions['beforeCopy'] = function ($from) {
            $publish = false;
            $dirname = basename($from);
            $parentFolder = basename(dirname($from));
            if (
                ($dirname === 'css' or $dirname === 'skins'  or $dirname === 'js') or
                ($parentFolder === 'css' or $parentFolder === 'skins'  or $parentFolder === 'js')
            ) {
                $publish = true;
            }
            return $publish;
        };
    }
}