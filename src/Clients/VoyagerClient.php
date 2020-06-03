<?php

declare(strict_types=1);

namespace PoP\GraphQLClientsForWP\Clients;

use PoP\GraphQLClientsForWP\ComponentConfiguration;
use PoP\GraphQLClientsForWP\Clients\AbstractClient;

class VoyagerClient extends AbstractClient
{
    /**
     * Indicate if the client is disabled
     *
     * @return boolean
     */
    protected function isClientDisabled(): bool
    {
        return ComponentConfiguration::isVoyagerClientEndpointDisabled();
    }
    protected function getEndpoint(): string
    {
        return ComponentConfiguration::getVoyagerClientEndpoint();
    }
    protected function getClientRelativePath(): string
    {
        return '/clients/voyager';
    }
    protected function getJSFilename(): string
    {
        return 'voyager.js';
    }
}
