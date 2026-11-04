# Attribution and licence

*Reference.*

## Upstream

[Material Design Icons](https://pictogrammers.com/library/mdi/) is by Pictogrammers (Austin Andrews and the Material Design Icons contributors). Source: [github.com/Templarian/MaterialDesign-SVG](https://github.com/Templarian/MaterialDesign-SVG).

## Licence

The icons and this package are owned separately:

- **The icons** are © Pictogrammers, under Apache-2.0 as the "Pictogrammers Free License" states. Simtabi LLC redistributes them and claims no authorship of them.
- **This package's code** (provider, enum, component, configuration) is © Simtabi LLC, [MIT](../LICENSE).

Apache-2.0 allows commercial and non-commercial use, modification and redistribution, provided the licence and the upstream's notices accompany every copy and modified files say so. The upstream notice is reproduced in [`ATTRIBUTION.md`](../ATTRIBUTION.md) at the package root, and the licence text ships in `resources/assets/svg/licenses/`; both are in the dist archive (`docs/` is not). Keep them with the icons if you copy them out of the package.

The licence was read at the vendored version before anything was vendored. `config.json` records it under `license`: SPDX id `Apache-2.0`, file `resources/assets/svg/licenses/mdi-svg/LICENSE`, SHA-256 `f3bc8715bad84b26396bb42d2abd11f919cf58163be158eab79ecbaabf84cdf2`, checked 2026-11-04.

## Credit

A visible credit is not required by the licence, but is welcome on a "credits" or "about" page:

> Icons from [Material Design Icons](https://pictogrammers.com/library/mdi/) by Pictogrammers (Apache-2.0)

## Updating from upstream

Asset refreshes run **maintainer-side** via
[`ichava/icon-sets-sync`](https://github.com/ichava/icon-sets-sync).
The weekly sync polls `@mdi/svg`, refreshes the bundled SVGs when upstream moves, and opens a pull
request. A human reviews it and tags a release.

End users **don't** refresh locally -- `vendor/` is regenerated on every
`composer install`, so any local change is discarded. Run
`php artisan ichava::ichava-core.check-updates --package=ichava/icon-sets-mdi`
to see whether a new upstream version is available.

## See also

- [Material Design Icons website](https://pictogrammers.com/library/mdi/)
- [Material Design Icons source](https://github.com/Templarian/MaterialDesign-SVG)

---

[← Docs index](../README.md#documentation)
