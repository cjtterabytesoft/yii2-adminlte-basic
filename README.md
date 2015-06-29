
[![Total Downloads](https://poser.pugx.org/cjtterabytesoft/yii2-adminlte-basic/downloads)](https://packagist.org/packages/cjtterabytesoft/yii2-adminlte-basic)
[![Latest Unstable Version](https://poser.pugx.org/cjtterabytesoft/yii2-adminlte-basic/v/unstable)](https://packagist.org/packages/cjtterabytesoft/yii2-adminlte-basic)
[![Build Status](https://travis-ci.org/cjtterabytesoft/yii2-adminlte-basic.svg?branch=master)](https://travis-ci.org/cjtterabytesoft/yii2-adminlte-basic)
[![Dependency Status](https://www.versioneye.com/user/projects/558a99cc306662001e00084b/badge.svg?style=flat)](https://www.versioneye.com/user/projects/558a99cc306662001e00084b)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/cjtterabytesoft/yii2-adminlte-basic/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/cjtterabytesoft/yii2-adminlte-basic/?branch=master)
[![Code Climate](https://codeclimate.com/github/cjtterabytesoft/yii2-adminlte-basic/badges/gpa.svg)](https://codeclimate.com/github/cjtterabytesoft/yii2-adminlte-basic)
[![License](https://poser.pugx.org/cjtterabytesoft/yii2-adminlte-basic/license)](https://packagist.org/packages/cjtterabytesoft/yii2-adminlte-basic)
[![Daily Downloads](https://poser.pugx.org/cjtterabytesoft/yii2-adminlte-basic/d/daily)](https://packagist.org/packages/cjtterabytesoft/yii2-adminlte-basic)
[![Monthly Downloads](https://poser.pugx.org/cjtterabytesoft/yii2-adminlte-basic/d/monthly)](https://packagist.org/packages/cjtterabytesoft/yii2-adminlte-basic)
![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)

Yii2 AdminLTE - Basic Application Template .
============================================

<p style="text-align: justify">Yii2 AdminLTE is a Extension Theme for Yii2 Basic Project Template is a skeleton 
Yii2 application best for rapidly creating small projects.</p>
                                       
<p style="text-align: justify">The template contains the basic features including user login/logout and a contact page. 
It includes all commonly used configurations that would allow you to focus on adding new features to your application.</p>

ScreenShot:
===========

![Home Page Skin-Black](https://drive.google.com/file/d/0B3UmtLcg7VeBTS1NbGk2QnBQWms/view)

![Home Page Skin-Blue](https://drive.google.com/file/d/0B3UmtLcg7VeBVXhHOWNGc2wxUm8/view)

![Home Page Skin-Green](https://drive.google.com/file/d/0B3UmtLcg7VeBdE4zc2lWaUVsSW8/view)

![Home Page Skin-purple](https://drive.google.com/file/d/0B3UmtLcg7VeBMm4zX05EU1FJZkE/view)

![Home Page Skin-red](https://drive.google.com/file/d/0B3UmtLcg7VeBejZzWGRWTWNTVzQ/view)

![Home Page Skin-yellow](https://drive.google.com/file/d/0B3UmtLcg7VeBdnNGVmtNNk05ZWc/view)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

Installed: [yii2-app-basic](https://github.com/yiisoft/yii2-app-basic/).

```
php composer.phar require --prefer-dist cjtterabytesoft/yii2-adminlte-basic "*"
```

or add

```
"cjtterabytesoft/yii2-adminlte-basic": "*"
```

to the require section of your `composer.json` file.

Config (web.php):

    /* defined language */
    'language' => 'es', // Your Language Custom //
    'components' => [
        // Configuration User [Theme AdminLTE - Basic] //
        'user' => [
            'identityClass' => 'cjtterabytesoft\adminlte\basic\models\User',
            'enableAutoLogin' => true,
        ],    
        // Configuration Theme [AdminLTE - Basic] //
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views/layouts' => '@cjtterabytesoft/adminlte/basic/views/layouts',
                    '@app/views/site'    => '@cjtterabytesoft/adminlte/basic/views/site',
                ],
            ],
        ],
        // Configuration ControllerMap [AdminLTE - Basic] //
        'controllerMap' => [
            'site' => [
                'class' => 'cjtterabytesoft\adminlte\basic\controllers\SiteController',
            ],
        ],        
    ]        
    
Config (params.php):

    return [
        'adminEmail'       => 'admin@example.com',
        'AdminLTESkin'     => 'skin-yellow', // Skin Theme AdminLte Options: [skin-black - skin-blue - skin-green - skin-purple - skin-red] //
        'Author'           => '2015 - Wilmer Arambula', // Your Brand //
        'Facebook_Account' => 'https://www.facebook.com/username',    // Your Facebook Account //
        'Google_Account'   => 'https://www.google.com/+username',     // Your Google+ Account //
        'Linkedin_Account' => 'https://www.linkedin.com/in/username', // Your Linkedin Account //
        'Twitter_Account'  => 'https://twitter.com/username',         // Your Twitter Account //
        'WebName'          => 'My Application', // Your Application Name //
        'imagesurl_30'     => 'http://www.basic.tk/images/avatar/profile/30/icon-avatar.png', // Your Url Avatar Images //
        'imagesurl_60'     => 'http://www.basic.tk/images/avatar/profile/60/icon-avatar.png',
    ]



Thankful to cjtterabytesoft [Donate Paypal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LRLATZP493W46).
Your Donation is Important to Further Develop Open Source Software.

