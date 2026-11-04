# Attribution

This package has two owners, and each part keeps its own licence.

| Part | Owner | Licence |
|---|---|---|
| The SVG icons in `resources/assets/svg/files/` | Pictogrammers (Austin Andrews and the Material Design Icons contributors) | Apache-2.0, text below |
| Everything else: the PHP, configuration, translations, tests and documentation | Simtabi LLC | MIT, see [`LICENSE`](LICENSE) |

Simtabi LLC packages and redistributes the icons. It did not draw them and claims no authorship of them.

## Material Design Icons

- **Project**: [Material Design Icons](https://pictogrammers.com/library/mdi/), source [github.com/Templarian/MaterialDesign-SVG](https://github.com/Templarian/MaterialDesign-SVG) (the npm package `@mdi/svg`)
- **Author**: Pictogrammers (Austin Andrews and contributors)
- **Vendored version**: 7.4.47 (`upstream.current_version` in `resources/assets/svg/config.json`)
- **Licence**: Apache-2.0 for the icons, as the "Pictogrammers Free License" below states; that file ships unchanged at `resources/assets/svg/licenses/mdi-svg/LICENSE`, and the Apache License 2.0 text it names ships at `resources/assets/svg/licenses/apache-2.0/LICENSE-2.0.txt`

Apache-2.0 lets you use, modify and redistribute the icons, commercially or not, on these conditions: every recipient gets a copy of the licence, modified files say they were changed, and the upstream's copyright and attribution notices are kept. This file and the licence text under `resources/assets/svg/licenses/` ship in the package so those conditions hold wherever it goes. If you copy the SVGs out of the package, copy this notice and the licence text with them. The licence grants no right to the upstream's trademarks.

**Changes made.** The SVGs passed through ichava/icon-sets-sync's sanitiser, which re-serialised the markup: a self-closing tag written ` />` upstream is written `/>`. Nothing else was changed, removed or added, checked file by file against the upstream bytes on 2026-11-04.

The upstream licence, verbatim from `LICENSE` in the npm tarball `@mdi/svg@7.4.47`:

```text
Pictogrammers Free License
--------------------------

This icon collection is released as free, open source, and GPL friendly by
the [Pictogrammers](http://pictogrammers.com/) icon group. You may use it
for commercial projects, open source projects, or anything really.

# Icons: Apache 2.0 (https://www.apache.org/licenses/LICENSE-2.0)
Some of the icons are redistributed under the Apache 2.0 license. All other
icons are either redistributed under their respective licenses or are
distributed under the Apache 2.0 license.

# Fonts: Apache 2.0 (https://www.apache.org/licenses/LICENSE-2.0)
All web and desktop fonts are distributed under the Apache 2.0 license. Web
and desktop fonts contain some icons that are redistributed under the Apache
2.0 license. All other icons are either redistributed under their respective
licenses or are distributed under the Apache 2.0 license.

# Code: MIT (https://opensource.org/licenses/MIT)
The MIT license applies to all non-font and non-icon files.
```

The Apache License, Version 2.0, that it names ships verbatim at `resources/assets/svg/licenses/apache-2.0/LICENSE-2.0.txt`.

## Crediting

Apache-2.0 asks for the licence and notices to travel with the icons, not for a visible credit. A credit is welcome:

> Icons from [Material Design Icons](https://pictogrammers.com/library/mdi/) by Pictogrammers (Apache-2.0).
