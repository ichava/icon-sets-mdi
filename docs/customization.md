# Customisation

*How-to guide.*

Material Design Icons icons paint with `currentColor`, so most styling happens through normal CSS.

## Colour

Set the colour with a text utility or an inline style:

```blade
<x-ichava::icon name="ichava/icon-sets-mdi::home" class="w-6 h-6 text-red-500" />
<x-ichava::icon name="ichava/icon-sets-mdi::home" style="color: #ef4444" class="w-6 h-6" />
```

With the fluent helper:

```blade
{{ ichava('ichava/icon-sets-mdi::home')->color('#ef4444')->class('w-6 h-6') }}
```

Upstream's MDI files set no `fill`, so the pack's component adds `fill="currentColor"` by default; without it the icons would paint black.

## Size

The viewBox is 0 0 24 24. Use any width and height utility:

```blade
<x-ichava::icon name="ichava/icon-sets-mdi::home" class="w-4 h-4" />
<x-ichava::icon name="ichava/icon-sets-mdi::home" class="w-12 h-12" />
```

## Setting a default class globally

In `config/ichava/core.php`:

```php
'components' => [
    'enabled'       => true,
    'default_class' => 'w-5 h-5 text-gray-700', // applied to every <x-ichava::icon>
],
```

Per-component `class="..."` overrides the global default.

## Accessibility

Add `aria-label` for icons that carry meaning (no adjacent text label):

```blade
<x-ichava::icon name="ichava/icon-sets-mdi::home" aria-label="Home" class="w-5 h-5" />
```

Decorative icons (next to a text label) can omit the label; the SPA renderer adds `aria-hidden="true"`.

## See also

- [Variants](variants.md)
- [Blade components](https://github.com/ichava/core/blob/main/docs/tools/blade-components.md)
- [Global helper](https://github.com/ichava/core/blob/main/docs/tools/global-helper.md)

---

[← Docs index](../README.md#documentation)
