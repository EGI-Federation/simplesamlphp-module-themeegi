# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [v-egi-1.4.1](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.4.0...v-egi-1.4.1) - 2021-01-20

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

## [v-egi-1.4.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.3.2...v-egi-1.4.0) - 2021-01-15

### Added

- EGI wrapper template for simple html views

## [v-egi-1.3.2](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.3.1...v-egi-1.3.2) - 2020-12-22

### Changed

- `browser_tab_title` from EGI to Check-in in `default.definition.json`
- `%IDP%` to `%IDPNAME%` in  `userid_error.definition.json`::`friendly_description`
- Removed `<a href=\"%RETRY_URL%\">` from `userid_error.definition.json`::`resolution_description`
- Removed redundant code from `conseform.php`

## [v-egi-1.3.1](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.3.0...v-egi-1.3.1) - 2020-12-21

### Added

- Exception template for attrauthcomanage module

### Changed

- Custom EGI footer date

## [v-egi-1.3.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.2.1...v-egi-1.3.0) - 2020-12-15

### Added

- Static View with information for Email Confirmation
- Add style rules and logos for the IdPs:
  - IDPOpen

## [v-egi-1.2.1](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.2.0...v-egi-1.2.1) - 2019-09-13

### Fixed

- Fix bug in IdPs buttons style caused by unclosed html element.

## [v-egi-1.2.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.1.0...v-egi-1.2.0) - 2019-09-02

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

## [v-egi-1.1.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v-egi-1.0.0...v-egi-1.1.0) - 2018-10-30

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

## [v-egi-1.0.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/compare/v2.0.0...v-egi-1.0.0) - 2018-05-07

### Changed

- Replace themevanilla -> themeegi
- Use EGI identity (logos, translations)
- Use custom EGI footer

## [v2.0.0](https://github.com/EGI-Foundation/simplesamlphp-module-themeegi/commits/v2.0.0) - 2018-04-17

### Added

Create a new theme for SimpleSAMLphp. The theme is a fork from [simplesamlphp-module-themevanilla](https://github.com/rciam/simplesamlphp-module-themevanilla).
