<?php

declare(strict_types=1);

namespace PoP\GraphQLClientsForWP\Clients;

use PoP\GraphQLClientsForWP\ComponentConfiguration;
use PoP\GraphQLClientsForWP\Clients\AbstractClient;

class GraphiQLClient extends AbstractClient
{
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
