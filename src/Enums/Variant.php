<?php

declare(strict_types=1);

namespace Simtabi\Laranail\Ichava\IconSetsMdi\Enums;

use Simtabi\Laranail\Ichava\Traits\HasIconSetVariants;
use Simtabi\Laranail\Ichava\Contracts\IconSetVariantInterface;
use Simtabi\Laranail\Ichava\IconSetsMdi\Constants\IconsConstants;

/**
 * Type-safe variant selection for Material Design Icons (default).
 *
 * The pack has one style, so its icons are not split into variant folders:
 * getPath() is the files directory itself.
 */
enum Variant: string implements IconSetVariantInterface
{
    use HasIconSetVariants;

    case DEFAULT = 'default';

    public function getPath(): string
    {
        return IconsConstants::getSvgPath();
    }

    private static function getDefaultValue(): string
    {
        return IconsConstants::getDefaultVariant() ?? self::DEFAULT->value;
    }

    private static function getClassPrefix(): string
    {
        return IconsConstants::getPrefix();
    }
}
