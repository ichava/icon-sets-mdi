<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsMdi\Providers;

use Simtabi\Laranail\Ichava\Support\IconPackServiceProvider;
use Simtabi\Laranail\Ichava\IconSetsMdi\Constants\IconsConstants;
use Simtabi\Laranail\Ichava\IconSetsMdi\View\Components\IconComponent;

/**
 * Registers the Material Design Icons set with the Ichava registry on boot.
 */
class IconsServiceProvider extends IconPackServiceProvider
{
    protected function constantsClass(): string
    {
        return IconsConstants::class;
    }

    protected function componentClass(): string
    {
        return IconComponent::class;
    }
}
