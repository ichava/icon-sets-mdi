# Variants

*Reference.*

`ichava/icon-sets-mdi` ships **7,447 icons in one style**: Pictogrammers' 24×24 filled glyphs, `viewBox="0 0 24 24"`.
There are no variant folders. Where MDI has an outlined design it is a separate icon whose name ends in
`-outline` (`heart` and `heart-outline`), so it is addressed by name:

```blade
<x-ichava::icon name="ichava/icon-sets-mdi::heart" class="w-6 h-6" />
<x-ichava::icon name="ichava/icon-sets-mdi::heart-outline" class="w-6 h-6" />
```

Browse the library at [pictogrammers.com/library/mdi](https://pictogrammers.com/library/mdi/), or through
[`ichava/icon-browser`](https://github.com/ichava/icon-browser).

## Variant enum (PHP)

The enum has one case, and its path is the files directory itself:

```php
use Simtabi\Laranail\Ichava\IconSetsMdi\Enums\Variant;

Variant::DEFAULT->value;      // 'default'
Variant::DEFAULT->isDefault(); // true
Variant::default();           // Variant::DEFAULT
```

The enum implements `IconSetVariantInterface` from core, so it works wherever core's registry expects a variant.

## See also

- [Customisation](customization.md)
- [Icon path format](https://github.com/ichava/core/blob/main/docs/tools/icon-path-format.md)

---

[← Docs index](../README.md#documentation)
