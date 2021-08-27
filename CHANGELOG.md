# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

<!-- markdownlint-disable line-length -->

## [v-egi-2.0.4](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-2.0.2...v-egi-2.0.4) - 2021-07-12

<!-- markdownlint-enable line-length -->

### Fixed

- Fixed not translated tab title
- Fixed discovery page idp buttons and idp searchable list blocks ordering

<!-- markdownlint-disable line-length -->

## [v-egi-2.0.3](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-2.0.2...v-egi-2.0.3) - 2021-07-08

<!-- markdownlint-enable line-length -->

### Added

- Add style rules and logos for the IdP Umbrellaid

<!-- markdownlint-disable line-length -->

## [v-egi-2.0.2](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.4.1...v-egi-2.0.2) - 2021-07-05

<!-- markdownlint-enable line-length -->

### Added

- `noty.tpl.php` template file

### Changed

- `noty.definition.json` dictionary to `attrauthcomanage_noty.definition.json`

<!-- markdownlint-disable line-length -->

## [v-egi-2.0.1](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.4.1...v-egi-2.0.1) - 2021-07-02

<!-- markdownlint-enable line-length -->

### Added

- `noty.definition.json` dictionary override for simplesamlphp-module-attrauthcomanage

<!-- markdownlint-disable line-length -->

## [v-egi-2.0.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.4.1...v-egi-2.0.0) - 2021-05-10

<!-- markdownlint-enable line-length -->

### Fixed

- Added missing space in button text
- Fix undefined index error for `idps_in_searchable_list_index`
- Load JavaScript scripts with the new way
- Load jQuery CSS script
- Fix `translationParams` error in userid template

### Changed

- Renamed login_at variable to login_with and moved in the discopower dictionary
- Rename disco-tpl.php->disco.tpl.php
- Change discopower js files path
- Update translation functionality for SSP v1.17
- Update language array
- Update templates of concent modules to support SSP v1.17
- Update "no_state" template to support SSP v1.17
- Update "disco" template to support SSP v1.17
- Move `ribbon_text` definition to config file
- Comply to [PSR-4: Autoloader](https://www.php-fig.org/psr/psr-4/) guidelines
- Comply to [PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/) guidelines
- Comply to [PSR-12: Extended Coding Style](https://www.php-fig.org/psr/psr-12/)
  guidelines
- Apply modern array syntax to comply with [SimpleSAMLphp v1.17](https://simplesamlphp.org/docs/stable/simplesamlphp-upgrade-notes-1.17)

<!-- markdownlint-disable line-length -->

## [v-egi-1.4.1](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.4.0...v-egi-1.4.1) - 2021-01-20

<!-- markdownlint-enable line-length -->

### Added

- Added comanage loader spinner
- Added Modal element

### Changed

- Retrieve terms and privacy policy urls from theme configuration
- Copyright update date dynamically
- Refactor disco-tpl.php, footer.php
- Move default loader spinner into a shared, stand alone element
- Made loader spinner configurable
- Moved language bar into a shared, stand alone element

<!-- markdownlint-disable line-length -->

## [v-egi-1.4.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.3.2...v-egi-1.4.0) - 2021-01-15

<!-- markdownlint-enable line-length -->

### Added

- EGI wrapper template for simple html views

<!-- markdownlint-disable line-length -->

## [v-egi-1.3.2](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.3.1...v-egi-1.3.2) - 2020-12-22

<!-- markdownlint-enable line-length -->

### Changed

- `browser_tab_title` from EGI to Check-in in `default.definition.json`
- `%IDP%` to `%IDPNAME%` in `userid_error.definition.json`::`friendly_description`
- Removed `<a href=\"%RETRY_URL%\">` from `userid_error.definition.json`::`resolution_description`
- Removed redundant code from `conseform.php`

<!-- markdownlint-disable line-length -->

## [v-egi-1.3.1](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.3.0...v-egi-1.3.1) - 2020-12-21

<!-- markdownlint-enable line-length -->

### Added

- Exception template for attrauthcomanage module

### Changed

- Custom EGI footer date

<!-- markdownlint-disable line-length -->

## [v-egi-1.3.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.2.1...v-egi-1.3.0) - 2020-12-15

<!-- markdownlint-enable line-length -->

### Added

- Static View with information for Email Confirmation
- Add style rules and logos for the IdPs:
  - IDPOpen

<!-- markdownlint-disable line-length -->

## [v-egi-1.2.1](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.2.0...v-egi-1.2.1) - 2019-09-13

<!-- markdownlint-enable line-length -->

### Fixed

- Fix bug in IdPs buttons style caused by unclosed html element.

<!-- markdownlint-disable line-length -->

## [v-egi-1.2.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.1.0...v-egi-1.2.0) - 2019-09-02

<!-- markdownlint-enable line-length -->

### Changed

- Alter Google login button style due to Google+ deprecation.

### Added

- Add login instructions for users that cannot find their IdP.
- Module discopower: Add style rules and logos for the IdPs:
  - QQ
  - WeChat
  - Epos
  - Bitbucket
  - Github

<!-- markdownlint-disable line-length -->

## [v-egi-1.1.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.0.0...v-egi-1.1.0) - 2018-10-30

<!-- markdownlint-enable line-length -->

### Added

- Add banner and an extra view for cookies options
- Add corner ribbon that displays customisable text
- Module discopower: Add style rules and logos for the IdPs:
  - eduTeams
  - EGI
  - Aria
- Add changelog file

### Changed

- Update screenshots
- Update footer style
- Render header logo link url customisable

<!-- markdownlint-disable line-length -->

## [v-egi-1.0.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v2.0.0...v-egi-1.0.0) - 2018-05-07

<!-- markdownlint-enable line-length -->

### Changed

- Replace themevanilla -> themeegi
- Use EGI identity (logos, translations)
- Use custom EGI footer

<!-- markdownlint-disable line-length -->

## [v2.0.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/commits/v2.0.0) - 2018-04-17

<!-- markdownlint-enable line-length -->

### Added

Create a new theme for SimpleSAMLphp. The theme is a fork from [simplesamlphp-module-themevanilla](https://github.com/rciam/simplesamlphp-module-themevanilla).
