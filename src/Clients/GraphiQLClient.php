<?php

declare(strict_types=1);

namespace GraphQLByPoP\GraphQLClientsForWP\Clients;

use GraphQLByPoP\GraphQLClientsForWP\ComponentConfiguration;
use GraphQLByPoP\GraphQLClientsForWP\Clients\AbstractClient;

class GraphiQLClient extends AbstractClient
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
    protected function getClientRelativePath(): string
    {
        return '/clients/graphiql';
    }
    protected function getJSFilename(): string
    {
        return 'graphiql.js';
    }
}
