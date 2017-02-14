# yii2-brainbase v0.1.0 (i18n)

[![Latest Stable Version](https://poser.pugx.org/yongtiger/yii2-brainbase/v/stable)](https://packagist.org/packages/yongtiger/yii2-brainbase)
[![Total Downloads](https://poser.pugx.org/yongtiger/yii2-brainbase/downloads)](https://packagist.org/packages/yongtiger/yii2-brainbase) 
[![Latest Unstable Version](https://poser.pugx.org/yongtiger/yii2-brainbase/v/unstable)](https://packagist.org/packages/yongtiger/yii2-brainbase)
[![License](https://poser.pugx.org/yongtiger/yii2-brainbase/license)](https://packagist.org/packages/yongtiger/yii2-brainbase)

Yii2 brainbase is a skeleton Yii 2 application based on the [Yii2 Advanced Template](https://github.com/yiisoft/yii2-app-advanced) best for developing complex Web applications with multiple tiers.

## FEATURES
* Internationalization
* Perfect code annotation
* Sample of extensions directory structure. `docs`, etc.
* `README.md`
* `composer.json`
* `development-roadmap.md`


## REQUIREMENTS

* PHP 5.4.0+
* Yii2 2.0.6+


## INSTALLATION   

The preferred way to install this project is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar global require "fxp/composer-asset-plugin:~1.1.1"
php composer.phar create-project --prefer-dist --stability=dev yongtiger/yii2-brainbase yii2-brainbase
```

or

```
git clone https://github.com/yongtiger/yii2-brainbase.git
php composer.phar install
```


## GETTING STARTED

1. Configure environments: `\yii2-brainbase\environments\dev\common\config\main-local.php`, `\yii2-brainbase\environments\prod\common\config\main-local.php`.
2. Run command `init` to initialize the application with a specific environment.
3. Create a new database and adjust the `components['db']` configuration in common/config/main-local.php accordingly.
4. Apply migrations with console command `yii migrate`. This will create tables needed for the application to work.
5. Example username/password: `admin/123456`.


## USAGES


## NOTES


## DOCUMENTS


## REFERENCES


## SEE ALSO


## TBD


## [DEVELOPMENT ROADMAP](docs/development-roadmap.md)


## LICENSE 
**yii2-brainbase** is released under the MIT license, see [LICENSE](https://opensource.org/licenses/MIT) file for details.