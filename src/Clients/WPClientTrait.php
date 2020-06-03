<?php

declare(strict_types=1);

namespace PoP\GraphQLClientsForWP\Clients;

use PoP\GraphQLClientsForWP\ComponentConfiguration;
use PoP\APIEndpointsForWP\ComponentConfiguration as APIEndpointsForWPComponentConfiguration;

trait WPClientTrait
{
    /**
     * Base URL
     *
     * @return string
     */
    protected function getComponentBaseURL(): ?string
    {
        return ComponentConfiguration::getGraphQLClientsComponentURL();
    }
    /**
     * Base Dir
     *
     * @return string
     */
    protected function getComponentBaseDir(): string
    {
        return dirname(__FILE__, 3);
    }

    /**
     * Endpoint URL
     *
     * @return string
     */
    protected function getEndpointURL(): string
    {
        return APIEndpointsForWPComponentConfiguration::getGraphQLAPIEndpoint();
    }
}
