# Development roadmap

## v0.4.0 (admin:login layout)

Features of this version:

* login layout


## v0.3.2 (admin:permission_access_backend)

Features of this version:

* fix: users without `permission_access_backend` should not login backend (`#403` error)


## v0.3.1 (admin:return home when guest accesses an invalid route)

Features of this version:

* fix: should return home when guest access an invalid route, but not to show `#404` error


## v0.3.0 (admin:rbac, menu, defaultRoles)

Features of this version:

* Admin: rbac, menu, defaultRoles
  - Note: fixed multi app (frontend/backend) @see https://github.com/mdmsoft/yii2-admin/pull/309/
  - Note: fixed Yii debug disappear in route


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
