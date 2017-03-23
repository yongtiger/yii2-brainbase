# Development roadmap

## v0.19.0 (regionTableName, settingTableName)


## v0.18.0 (FIX# i18n:long text translation)


## v0.17.5 (CHG# yongtiger.admin.configs:log)]


## v0.17.4 (frontend\components\Application.php:Yii::$app->language = Yii::$app->user->identity->preference->locale)


## v0.17.3 (frontend\components\Application.php:datetimeFormat, dateFormat, timeFormat)


## v0.17.2 (frontend\components\Application.php:Yii::$app->timeZone = Yii::$app->user->identity->preference->time_zone)


## v0.17.1 (frontend\views\layouts\main.php:TimeZone::timezone_format(\Yii::$app->timeZone))


## v0.17.0 (#ADD User Preference, formatter)


## v0.16.0 (#ADD backend:isAdminEnd)


## v0.15.0 (admin log, typo)


## v0.14.0 (UPG# extends yii\base\theme:theme pathMap supports view files)


## v0.13.2 (backend:Frontend Info:Application::remoteAppCall)


## v0.13.1 (backend:Frontend Info, Backend Info)


## v0.13.0 (backend:System Info)


## v0.12.4 (CHG# backend:cache controller:redirect(['index']))


## v0.12.3 (i18n at backend cache)


## v0.12.2 (CHG# yongtiger\application\Application::remoteAppCall)


## v0.12.1 (UGD# replace component/application into yongtiger/appliaction)


## v0.12.0 (ADD# backend:cache controller, view)


## v0.11.1 (CHG# activeTheme)


## v0.11.0 (ADD# theme Module, ThemeManager)


## v0.10.7 (ADD# backend\components\Application)


## v0.10.6 (ADD# frontend\components\Application)


## v0.10.5 (filter theme bootstrap)


## v0.10.4 (customize application:beforeInit)


## v0.10.3 (FIX# frontend theme:site.css logo class `.navbar-brand`)


## v0.10.2 (frontend theme:frontend\themes\yii2themeyii\src)


## v0.10.1 (typo)


## v0.10.0 (frontend theme)


## v0.9.6 (site-login)


## v0.9.5 (profile region widget)


## v0.9.4 (frontend layout:logo)


## v0.9.3 (rbac cache)


## v0.9.2 (frontend\views\layouts\main.php:Dropdown Logout by `a` tag)


## v0.9.1 (customize application)


## v0.9.0 (configure from db after application instantiation)


## v0.8.1 ($this->params['alertClassName'] callable)


## v0.8.0 (admin&user:code reconstruction)


## v0.7.4 (backend:config user module)


## v0.7.3 (backend:login layout)


## v0.7.2 (yongtiger\admin\components\AccessControl\allowActions:'user/security/captcha')


## v0.7.1 (backend:admin config theme pathMap)


## v0.7.0 (backend:admin reconstruction)

Features of this version:

* backend:admin reconstruction


## v0.6.0 (backend:layout & menu)

Features of this version:

* backend:layout & menu


## v0.5.0 (yongtiger/yii2-admin)

Features of this version:

* Using yongtiger/yii2-admin


## v0.4.4 (admin:fix# mdmsoft/yii2-admin multi app)

Features of this version:

* FIX# mdmsoft/yii2-admin multi app


## v0.4.3 (admin:fix# menu display order)

Features of this version:

* FIX# menu display order


## v0.4.2 (admin:fix# autocomplete parent of creating&updating menu)

Features of this version:

* FIX# autocomplete parent of creating&updating menu


## v0.4.1 (admin:fix# menu autocomplete when using mdmsoft/yii2-admin multi app)

Features of this version:

* FIX# menu autocomplete when using mdmsoft/yii2-admin multi app


## v0.4.0 (admin:login layout)

Features of this version:

* login layout


## v0.3.2 (admin:permission_access_backend)

Features of this version:

* FIX# users without `permission_access_backend` should not login backend (`#403` error)


## v0.3.1 (admin:return home when guest accesses an invalid route)

Features of this version:

* FIX# should return home when guest access an invalid route, but not to show `#404` error


## v0.3.0 (admin:rbac, menu, defaultRoles)

Features of this version:

* Admin: rbac, menu, defaultRoles
  - Note: UPG# mdmsoft/yii2-admin multi app @see https://github.com/mdmsoft/yii2-admin/pull/309/
  - Note: FIX# Yii debug disappear in route page when using mdmsoft/yii2-admin multi app


## v0.2.0 (setting)

Features of this version:

* All settings are read from DB or cache into a static array at frontend. Updates specified setting category at backend.
* Internationalization


## v0.1.0 (i18n)

Features of this version:

* Internationalization


## v0.0.0 (initial commit)

Features of this version:

* Sample of extensions directory structure. `docs`, etc.
* `README.md`
* `composer.json`
* `development-roadmap.md`
