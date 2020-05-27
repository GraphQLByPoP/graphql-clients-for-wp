<?php

declare(strict_types=1);

namespace PoP\GraphQLClientsForWP\Clients;

use PoP\GraphQLClientsForWP\ComponentConfiguration;

trait WPClientTrait
{
    /**
     * Base URL
     *
     * @return string
     */
    protected function getBaseURL(): string
    {
        return ComponentConfiguration::getSiteURL();
    }

    /**
     * Endpoint URL
     *
     * @return string
     */
    protected function getEndpointURL(): string
    {
        return '/api/graphql/';
    }
}
