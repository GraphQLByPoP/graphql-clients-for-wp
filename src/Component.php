<?php

declare(strict_types=1);

namespace PoP\GraphQLClientsForWP;

use PoP\Root\Component\AbstractComponent;
use PoP\Root\Component\YAMLServicesTrait;
use PoP\GraphQL\Component as GraphQLComponent;
use PoP\Root\Component\CanDisableComponentTrait;
use PoP\ComponentModel\Container\ContainerBuilderUtils;
use PoP\ComponentModel\Facades\Instances\InstanceManagerFacade;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    use YAMLServicesTrait, CanDisableComponentTrait;

    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\APIClients\Component::class,
            \PoP\APIEndpointsForWP\Component::class,
            \PoP\GraphQL\Component::class,
        ];
    }

    /**
     * Initialize services
     */
    protected static function doInitialize(array $configuration = [], bool $skipSchema = false): void
    {
        if (self::isEnabled()) {
            parent::doInitialize($configuration, $skipSchema);
            ComponentConfiguration::setConfiguration($configuration);
            self::initYAMLServices(dirname(__DIR__));
        }
    }

    protected static function resolveEnabled()
    {
        return GraphQLComponent::isEnabled();
    }

    /**
     * Boot component
     *
     * @return void
     */
    public static function beforeBoot(): void
    {
        parent::beforeBoot();

        // Initialize services
        $instanceManager = InstanceManagerFacade::getInstance();
        $clientServiceClasses = ContainerBuilderUtils::getServiceClassesUnderNamespace(__NAMESPACE__ . '\\Clients');
        foreach ($clientServiceClasses as $serviceClass) {
            $instanceManager->getInstance($serviceClass)->initialize();
        }
    }
}
