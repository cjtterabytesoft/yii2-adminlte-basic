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
 * @Tests App Configuration Codeception [_init].
 * @since 1.0
 */

if ((getenv('TEST_ENVIRONMENT') === 'travis')) {
    $vendor = __DIR__ . '/../../vendor';
} else {
    $vendor = __DIR__ . '/../../../../../vendor';
}

defined('YII_DEBUG') or define('YII_DEBUG', false);
defined('YII_ENV') or define('YII_ENV', 'test');
defined('YII_TEST_ENTRY_URL') or define('YII_TEST_ENTRY_URL', '/index-test.php');
defined('YII_TEST_ENTRY_FILE') or define('YII_TEST_ENTRY_FILE', __DIR__.'/_app/web/index-test.php');
defined('VENDOR_DIR') or define('VENDOR_DIR', $vendor);

require_once VENDOR_DIR . '/autoload.php';
require_once VENDOR_DIR . '/yiisoft/yii2/Yii.php';
