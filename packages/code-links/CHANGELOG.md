## 0.3.10
* Use `@text-color` as color for highlighting links
* Strip CRLF from the repo
* Add option to use Meta key (cmd/win)

## 0.3.9
* Fixed tests
* Added support for ES6 module imports [#12](https://github.com/AsaAyers/code-links/pull/12)

## 0.3.8
* Scroll to cursor position when switching files.
* `javascript-processor` links variables to where they were defined. When the declaration is a simple `var x = require(...)` `x` will link to the destination file.

## 0.3.7
* :up_arrow: Update to espree 1.11 to gain class and module support

## 0.3.6
* Prevent ctrl+click from creating multiple cursors when ctrl+clicking a link
* :memo: Documentation on how to create compatible plugins
* URLs open in `web-browser` if it's installed. Otherwise they open in your external browser.

## 0.3.5
* :bug: Opening paths was happening relative to the root, so any link to a file starting with `../` would actually go outside your project.

## 0.3.3
* [service] Providers can return http/https URLs
* :bug: Prevent modifier key from triggering when display mode is `always`

## 0.3.2
* [service] optional `scanForDestination()` to let providers jump to a specific location in the destination file.
* `javascript-processor` now jumps to `module.exports`

## 0.3.1 - Semver!
* 0.3.0 was tagged but failed to publish to apm.
* Until 1.0 and 0.x increases indicate a non-backward compatible api change.
* Added tests for `javascript-processor`
* [service] Changed `processEditor(editor)` to `process(source)`. `source` is just the plain text of what is in the editor.
* [service] No need to return a `processor` property. Just return an array of objects
with a `range`

      [
      { range: [ [line, startColumn], [line,endColumn] ] },
      { range: [ [line, startColumn], [line,endColumn] ] }
      ]

* Settings - You can change your modifier key
* Settings - By default links will only be visible while holding the modifier key.

## 0.2.0
* Detect macs and switch to the alt key (this will probably become configurable)

## 0.1.2
* Also match paths starting with `../`

## 0.1.1 - Bugfix
* Catch when `resolve` can't find the target file.
* Log when multiple markers are found instead of throwing.

## 0.1.0 - First Release
* Extremely naive JavaScript provider (only handles relative links)
* Blue underlines links
* Handles ctrl+click while ignoring all others
