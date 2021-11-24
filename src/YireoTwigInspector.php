<?php declare(strict_types=1);

namespace Yireo\TwigInspector;

use Oro\TwigInspector\Bundle\OroTwigInspectorBundle;
use Shopware\Core\Framework\Parameter\AdditionalBundleParameters;
use Shopware\Core\Framework\Plugin;

class YireoTwigInspector extends Plugin
{
    public function getAdditionalBundles(AdditionalBundleParameters $parameters): array
    {
        return [
            new OroTwigInspectorBundle
        ];
    }
}
