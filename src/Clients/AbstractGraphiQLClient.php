<?php

declare(strict_types=1);

namespace GraphQLByPoP\GraphQLClientsForWP\Clients;

use GraphQLAPI\GraphQLAPI\Facades\ModuleRegistryFacade;
use GraphQLByPoP\GraphQLClientsForWP\Clients\AbstractClient;
use GraphQLByPoP\GraphQLClientsForWP\ComponentConfiguration;
use GraphQLAPI\GraphQLAPI\ModuleResolvers\ClientFunctionalityModuleResolver;

abstract class AbstractGraphiQLClient extends AbstractClient
{
    /**
     * Indicate if the client is disabled
     *
     * @return boolean
     */
    protected function isClientDisabled(): bool
    {
        return ComponentConfiguration::isGraphiQLClientEndpointDisabled();
    }
    protected function getEndpoint(): string
    {
        return ComponentConfiguration::getGraphiQLClientEndpoint();
    }

    /**
     * Indicate if the endpoint has been requested.
     * Check if GraphiQL Explorer is enabled or not
     */
    protected function isEndpointRequested(): bool
    {
        $moduleRegistry = ModuleRegistryFacade::getInstance();
        $useGraphiQLExplorer = $moduleRegistry->isModuleEnabled(ClientFunctionalityModuleResolver::GRAPHIQL_EXPLORER);
        return
            $this->matchesGraphiQLExplorerRequiredState($useGraphiQLExplorer)
            && parent::isEndpointRequested();
    }

    /**
     * Check if GraphiQL Explorer must be enabled or not
     */
    abstract protected function matchesGraphiQLExplorerRequiredState(bool $useGraphiQLExplorer): bool;
}
