<?php

declare(strict_types=1);

namespace PoP\GraphQLClientsForWP\Clients;

use PoP\GraphQLClientsForWP\ComponentConfiguration;
use PoP\GraphQLClientsForWP\Clients\AbstractClient;

class VoyagerClient extends AbstractClient
{
    protected function getEndpoint(): string
    {
        return ComponentConfiguration::getVoyagerClientEndpoint();
    }
    protected function getVendorDirPath(): string
    {
        return '/vendor/leoloso/pop-graphql-voyager';
    }
    protected function getJSFilename(): string
    {
        return 'voyager.js';
    }
}
