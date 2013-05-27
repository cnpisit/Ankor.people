ZendSkeletonApplication
=======================

Introduction
------------
This is a simple, skeleton application using the ZF2 MVC layer and module
systems. This application is meant to be used as a starting place for those
looking to get their feet wet with ZF2.


Installation
------------

Using Composer (recommended)
----------------------------
The recommended way to get a working copy of this project is to clone the repository
and use `composer` to install dependencies using the `create-project` command:

    curl -s https://getcomposer.org/installer | php --
    php composer.phar create-project --repository-url="http://packages.zendframework.com" zendframework/skeleton-application path/to/install

Alternately, clone the repository and manually invoke `composer` using the shipped
`composer.phar`:

    cd my/project/dir
    git clone git://github.com/zendframework/ZendSkeletonApplication.git
    cd ZendSkeletonApplication
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar`
available.)

Another alternative for downloading the project is to grab it via `curl`, and
then pass it to `tar`:

    cd my/project/dir
    curl -#L https://github.com/zendframework/ZendSkeletonApplication/tarball/master | tar xz --strip-components=1

You would then invoke `composer` to install dependencies per the previous
example.

Using Git submodules
--------------------
Alternatively, you can install using native git submodules:

    git clone git://github.com/zendframework/ZendSkeletonApplication.git --recursive

Virtual Host
------------
#	<VirtualHost *:80>
	 ServerName ankorpeopel.local
	 DocumentRoot "D:\web\ankorpeople\public"
	 <Directory "D:\web\ankorpeople\public">
	  Options Indexes FollowSymLinks MultiViews
	  # AllowOverride None
	  AllowOverride FileInfo
	  Order allow,deny
	  Allow from all
	 </Directory>
	 DirectoryIndex index.html index.php
#	</VirtualHost>




ScnSocialAuth
=============
Uses the HybridAuth PHP library to Enable authentication via Google, Facebook, Twitter, Yahoo!, etc for the ZfcUser ZF2 module.

[![Build Status](https://travis-ci.org/SocalNick/ScnSocialAuth.png)](https://travis-ci.org/SocalNick/ScnSocialAuth)

Requirements
------------
* [Zend Framework 2](https://github.com/zendframework/zf2) (latest master)
* [ZfcBase](https://github.com/ZF-Commons/ZfcBase) (latest master)
* [ZfcUser](https://github.com/ZF-Commons/ZfcUser) (latest master)
* [HybridAuth](https://github.com/hybridauth/hybridauth) (latest master)
* Extension php_curl enabled in php.ini

Features
--------
* Login with AOL [NO LONGER SUPPORTED]
* Login with Facebook [COMPLETE]
* Login with Foursquare [COMPLETE]
* Login with Github [COMPLETE]
* Login with Google [COMPLETE]
* Login with LinkedIn [COMPLETE]
* Login with Live [INCOMPLETE]
* Login with MySpace [INCOMPLETE]
* Login with OpenID [INCOMPLETE]
* Login with Twitter [COMPLETE]
* Login with Yahoo! [COMPLETE]

Installation
------------
It is recommended to add this module to your Zend Framework 2 application using Composer. After cloning [ZendSkeletonApplication](https://github.com/zendframework/ZendSkeletonApplication), change the composer minimum-stability setting to "dev" and add "socalnick/scn-social-auth" to list of requirements, then run php composer.phar install/update. Your composer.json should look something like this:
```
{
    "name": "zendframework/skeleton-application",
    "description": "Skeleton Application for ZF2",
    "license": "BSD-3-Clause",
    "keywords": [
        "framework",
        "zf2"
    ],
    "minimum-stability": "dev",
    "homepage": "http://framework.zend.com/",
    "require": {
        "php": ">=5.3.3",
        "zendframework/zendframework": "2.1.3",
	"socalnick/scn-social-auth": "1.9.2"
    }
}
```

Next add the required modules to config/application.config.php:
```
<?php
return array(
    'modules' => array(
        'Application',
        'ScnSocialAuth',
        'ZfcBase',
        'ZfcUser',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
```

Import the schemas for ZfcUser (`./vendor/zf-commons/zfc-user/data/schema.sql`) and ScnSocialAuth (`./vendor/socalnick/scn-social-auth/data/schema.sql`).

If you do not already have a valid Zend\Db\Adapter\Adapter in your service
manager configuration, put the following in `./config/autoload/database.local.php`:
```
<?php

$dbParams = array(
    'database'  => 'changeme',
    'username'  => 'changeme',
    'password'  => 'changeme',
    'hostname'  => 'changeme',
);

return array(
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => function ($sm) use ($dbParams) {
                return new Zend\Db\Adapter\Adapter(array(
                    'driver'    => 'pdo',
                    'dsn'       => 'mysql:dbname='.$dbParams['database'].';host='.$dbParams['hostname'],
                    'database'  => $dbParams['database'],
                    'username'  => $dbParams['username'],
                    'password'  => $dbParams['password'],
                    'hostname'  => $dbParams['hostname'],
                ));
            },
        ),
    ),
);
```

If you do not already have a valid Zend\Session\SessionManager in your service
manager configuration, put the following in `./config/autoload/session.local.php`:
```
<?php

return array(
    'service_manager' => array(
        'invokables' => array(
            'Zend\Session\SessionManager' => 'Zend\Session\SessionManager',
        ),
    ),
);
```

/config/autoload/recaptcha.php
`````
<?php

return array(
    'di'=> array(
        'instance'=>array(
            'alias'=>array(
                // OTHER ELEMENTS....
                'recaptcha_element' => 'Zend\Form\Element\Captcha',
            ),
            'recaptcha_element' => array(
                'parameters' => array(
                    'spec' => 'captcha',
                    'options'=>array(
                        'label'      => '',
                        'required'   => true,
                        'order'      => 500,
                        'captcha'    => array(
                            'captcha' => 'ReCaptcha',
                            'privkey' => RECAPTCHA_PRIVATE_KEY,
                            'pubkey'  => RECAPTCHA_PUBLIC_KEY,
                        ),
                    ),
                ),
            ),
            'ZfcUser\Form\Register' => array(
                'parameters' => array(
                    'captcha_element'=>'recaptcha_element',
                ),
            ),
        ),
    ),
);
?>

`````

Options
-------
Make sure to check the options available in ZfcUser: https://github.com/ZF-Commons/ZfcUser#options

The ScnSocialAuth module has two files that allow you to configure supported providers.
After installing ScnSocialAuth, copy
`./vendor/socalnick/scn-social-auth/config/scn-social-auth.global.php.dist` to
`./config/autoload/scn-social-auth.global.php` and change the values as desired.
Also copy
`./vendor/socalnick/scn-social-auth/config/scn-social-auth.local.php.dist` to
`./config/autoload/scn-social-auth.local.php` and change the values as desired.


Configure doctrine 
---------------------------------------------------------	
add this line into your composer.json 

Installation
------------
It is recommended to add this module to your Zend Framework 2 application using Composer. After cloning [ZendSkeletonApplication](https://github.com/zendframework/ZendSkeletonApplication), change the composer minimum-stability setting to "dev" and add "socalnick/scn-social-auth" to list of requirements, then run php composer.phar install/update. Your composer.json should look something like this:
```
{
    "name": "zendframework/skeleton-application",
    "description": "Skeleton Application for ZF2",
    "license": "BSD-3-Clause",
    "keywords": [
        "framework",
        "zf2"
    ],
    "minimum-stability": "dev",
    "homepage": "http://framework.zend.com/",
    "require": {
        "php": ">=5.3.3",
         "zendframework/zendframework": "2.1.3",
	"socalnick/scn-social-auth": "1.9.2",
        "doctrine/doctrine-orm-module": "dev-master"
    }
}
`````
Next add the required modules to config/application.config.php:
```
<?php
return array(
    'modules' => array(
        'Application',
        'ScnSocialAuth',
        'ZfcBase',
        'ZfcUser',
		'DoctrineModule', <--added
        'DoctrineORMModule' <--added
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
```
module/Album/config/module.config.php
add all this belove view_manager
````
return array(
    'router' => array(
        ...... 
    'service_manager' => array(
        ......
    ),
    'translator' => array(
        ........
    ),
    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Index' => 'Album\Controller\IndexController',
            'Users' => 'Album\Controller\UsersController'
        ),
    ),
    'view_manager' => array(
        ..............
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
	#this module we should add
	
    'doctrine' => array(
    'driver' => array(
      __NAMESPACE__ . '_driver' => array(
        'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
        'cache' => 'array',
        'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
      ),
      'orm_default' => array(
        'drivers' => array(
          __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
        )
      )
    )
  )
);

```
https://docs.google.com/document/d/1zwFUwtJytgjxrudz-Bt3kLBY6kIl0_aqIdlhL_ctfoc/edit (command to generate Entity automatically)



