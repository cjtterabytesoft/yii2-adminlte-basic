
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

![Home Page Skin-Black](https://lh3.googleusercontent.com/4vg4Ikb6gmXUf957Cha06cGpk8MR8Uo9V9RNjrXCShLUdCuwxSmjyPGciiwLOPBe2AYNVWsdUTzgqf8=w1656-h829-rw)

![Home Page Skin-Blue](https://lh4.googleusercontent.com/E-JgiPtK9KdvErZl02scQaJGxfVLd9VaT87PzwgIxXHBUn8q6m4FTl-2rdIFarkQ_WeCfpROxTkRO6c=w1656-h829-rw)

![Home Page Skin-Green](https://lh5.googleusercontent.com/-8yGcIaJK7XbUhO66OPbDLTM_c0JoG5wxB1crin5sKR-OVPdKif19-XnUzG_1U3UFhCZZ_YXAa0znsk=w1656-h829-rw)

![Home Page Skin-purple](https://lh6.googleusercontent.com/go3xfwEb2IxU3PvBgFhr_StRnMSHUQyCoEi_jj-agn1BjXtkcwfnvRmjJ-cFy7qZhu5-WI8CajKBhik=w1656-h603-rw)

![Home Page Skin-red](https://lh5.googleusercontent.com/6UhXXSh7Dfs0a3qCj_J8pB3xfar-NOkOZv_EXTgKfFruYaiwKs_kXPNdWU9TZQgpgpnUheEG0lvpm3U=w1656-h603-rw)

![Home Page Skin-yellow](https://lh4.googleusercontent.com/79GBlzHPBiX-AqHaFRAr_oMkPNlS3GzWMxwGmqpSzU8KbkaRaqM_BzgPcrZyPS7WOb4ZtvkNKg30RnU=w1656-h603-rw)


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

