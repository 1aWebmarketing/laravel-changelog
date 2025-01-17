## Changelog Parser and App Version Display function

This is a package to provide 2 functions for displaying the `CHANGELOG.md` file and retrieve the current Application Version from the latest `CHANGELOG.md` entry.

## Functions

- `getAppChangelog()` - Converts the Markdown Changelog to HTML and can be displayed with `{!! getAppChangelog() !!}`
- `getAppVersion()` - Returns the latest App Version from the `CHANGELOG.md`
