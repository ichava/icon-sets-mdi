<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\IconSetsMdi\Enums\Variant;

/**
 * Pins the canonical `resources/` shape shared by every Ichava icon pack.
 *
 * The variant assertion is the load-bearing one: comparing the translation keys
 * against the real enum is what makes a file copied from another pack fail.
 */
function mdi_resources(): string
{
    return dirname(__DIR__, 2) . '/resources';
}

/** @return array<string, mixed> */
function mdi_lang(): array
{
    return require mdi_resources() . '/lang/en/icons.php';
}

/** @return array<string, mixed> */
function mdi_config(): array
{
    return json_decode(
        (string) file_get_contents(mdi_resources() . '/assets/svg/config.json'),
        true,
        flags: JSON_THROW_ON_ERROR,
    );
}

it(description: 'ships every path of the canonical resource shape', closure: function () {
    foreach ([
        'assets/svg/config.json',
        'assets/svg/files',
        'assets/svg/licenses/mdi-svg/LICENSE',
        'lang/en/icons.php',
        'views/components',
    ] as $path) {
        expect(file_exists(mdi_resources() . '/' . $path))->toBeTrue("missing resources/{$path}");
    }
});

it(description: 'does not name the translation group after the locale', closure: function () {
    expect(file_exists(mdi_resources() . '/lang/en/en.php'))->toBeFalse();
});

it(description: 'does not duplicate config.json metadata in english', closure: function () {
    expect(mdi_lang())->not->toHaveKey('name')
        ->and(mdi_lang())->not->toHaveKey('description');
});

it(description: 'matches its variant keys to the Variant enum and to config.json exactly', closure: function () {
    $expected = array_column(Variant::cases(), 'value');
    sort($expected);

    $declared = array_keys(mdi_config()['metadata']['data']['variants']);
    sort($declared);
    expect($declared)->toBe($expected, 'config.json variants do not match the Variant enum');

    foreach (['variants', 'variant_descriptions'] as $group) {
        $actual = array_keys(mdi_lang()[$group]);
        sort($actual);

        expect($actual)->toBe(
            $expected,
            "resources/lang/en/icons.php [{$group}] does not match the Variant enum. "
            . 'A mismatch here usually means the file was copied from another pack.',
        );
    }
});

it(description: 'declares itself as this package in config.json', closure: function () {
    expect(mdi_config()['package']['name'])->toBe('ichava/icon-sets-mdi');
});

it(description: 'points metadata.repository at this package, not its upstream', closure: function () {
    // `metadata.repository` is THIS package's repository (settled 2026-09-21 for
    // the family); upstream identity lives in the `upstream` block.
    expect(mdi_config()['metadata']['repository'])->toBe('https://github.com/ichava/icon-sets-mdi');
});

it(description: 'points metadata.homepage at the upstream project, never at this package', closure: function () {
    $config = mdi_config();
    $homepage = $config['metadata']['homepage'] ?? null;

    expect($homepage)->toBe('https://pictogrammers.com/library/mdi/')
        ->and($homepage)->not->toBe($config['metadata']['repository']);
    expect($homepage)->not->toContain('github.com/ichava/');
});
