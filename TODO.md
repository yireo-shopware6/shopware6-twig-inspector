Add line to `config/bundles.php`:
```php
\Oro\TwigInspector\Bundle\OroTwigInspectorBundle::class => ['all' => true]
```

See also https://github.com/oroinc/twig-inspector/blob/HEAD/Bundle/Resources/doc/usage.md

# TODO
- Add scope to OpenTemplateController
    - use Shopware\Core\Framework\Routing\Annotation\RouteScope;
    - @RouteScope(scopes={"storefront"})
    - `$apiPrefixes = $container->setParameter('shopware.routing.registered_api_prefixes', $apiPrefixes);`
    - Add controller to @apiPrefixes
./
