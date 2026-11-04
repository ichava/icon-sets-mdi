<?php

declare(strict_types=1);

use Simtabi\Laranail\Ichava\Services\IconRegistry;
use Simtabi\Laranail\Ichava\IconSetsMdi\Enums\Variant;
use Simtabi\Laranail\Ichava\IconSetsMdi\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsMdi\Providers\IconsServiceProvider;

it(description: 'boots the provider without error', closure: function () {
    $providers = array_keys($this->app->getLoadedProviders());

    expect($providers)->toContain(IconsServiceProvider::class);
});

it(description: 'resolves constants from config json', closure: function () {
    expect(IconsConstants::getVendorPackage())->toBe('ichava/icon-sets-mdi')
        ->and(IconsConstants::getTitle())->toBe('Material Design Icons')
        ->and(IconsConstants::getPrefix())->toBe('mdi')
        ->and(IconsConstants::getDefaultVariant())->toBe('default');
});

it(description: 'uses the config prefix in enum class helpers', closure: function () {
    expect(Variant::DEFAULT->getClass())->toBe('mdi-default');
});

it(description: 'matches the default variant to config json', closure: function () {
    expect(Variant::default())->toBe(Variant::DEFAULT)
        ->and(Variant::DEFAULT->isDefault())->toBeTrue();
});

it(description: 'points every variant at a directory that holds its icons', closure: function () {
    foreach (Variant::cases() as $variant) {
        $path = $variant->getPath();
        expect(is_dir($path))->toBeTrue("{$variant->value} points at {$path}, which is not a directory")
            ->and(glob($path . '/*.svg') ?: glob($path . '/*/*.svg') ?: [])->not->toBeEmpty("{$variant->value} holds no icons");
    }
});

it(description: 'picks up the package in the icon registry', closure: function () {
    $registry = $this->app->make(IconRegistry::class);

    expect($registry->isRegistered('ichava/icon-sets-mdi'))->toBeTrue(
        'IconRegistry should have ichava/icon-sets-mdi registered after boot.',
    );
});

it(description: 'resolves and renders the documented example icons', closure: function () {
    $registry = $this->app->make(IconRegistry::class);
    $samples = ['home', 'account', 'heart-outline'];

    expect($samples)->not->toBeEmpty();

    foreach ($samples as $item) {
        $id = "ichava/icon-sets-mdi::{$item}";

        expect(is_file(dirname(__DIR__, 2) . "/resources/assets/svg/files/{$item}.svg"))->toBeTrue("{$item}.svg is missing")
            ->and($registry->has($id))->toBeTrue("{$id} does not resolve")
            ->and($registry->render($id))->toContain('<svg');
    }
});
