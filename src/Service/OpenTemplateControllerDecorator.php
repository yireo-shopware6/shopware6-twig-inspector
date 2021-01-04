<?php declare(strict_types=1);

namespace Yireo\TwigInspector\Service;

use Oro\TwigInspector\Controller\OpenTemplateController;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;

/**
 * Class OpenTemplateControllerDecorator
 * @package Yireo\TwigInspector\Service
 * @RouteScope(scopes={"storefront"})
 */
class OpenTemplateControllerDecorator extends OpenTemplateController
{

}
