# Changelog Parser and App Version Display function

This is a package to provide 2 functions for displaying the `CHANGELOG.md` file and retrieve the current Application Version from the latest `CHANGELOG.md` entry.

## Installation

Require this package with composer.

```shell
composer require oneawebmarketing/laravel-changelog
```

## Changelog format

This packages works flawless with a `CHANGELOG.md` file in your repository base folder in the format suggested by [keepachangelog.com](https://keepachangelog.com/)
You find a sample `CHANGELOG.md` file in this repository.

## Functions

- `getAppChangelog()` - Converts the Markdown Changelog to HTML and can be displayed with `{!! getAppChangelog() !!}`
- `getAppVersion()` - Returns the latest App Version from the `CHANGELOG.md`

## Versioning

This project follows [Semantic Versioning](https://semver.org/), which uses the format `MAJOR.MINOR.PATCH`:

- **MAJOR**: Incremented for incompatible API changes or major feature overhauls.
- **MINOR**: Incremented when adding functionality in a backward-compatible manner.
- **PATCH**: Incremented for backward-compatible bug fixes or minor changes.

For example:
- `1.0.0`: Initial stable release.
- `1.1.0`: Adds new features while maintaining backward compatibility.
- `1.1.1`: Fixes bugs in the existing features without changing functionality.

Pre-release versions (e.g., `1.0.0-alpha`) and build metadata (e.g., `1.0.0+20220101`) may also be used to indicate development stages or build details.

We recommend adhering strictly to Semantic Versioning to ensure clarity and consistency for users and contributors.

## Security Vulnerabilities

If you discover any security vulnerabilities, feel free to open a pull request.
