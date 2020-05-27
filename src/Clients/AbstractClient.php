<?php

declare(strict_types=1);

namespace PoP\GraphQLClientsForWP\Clients;

use PoP\APIClients\ClientTrait;
use PoP\GraphQLClientsForWP\Clients\WPClientTrait;
use PoP\APIEndpointsForWP\EndpointHandlers\AbstractEndpointHandler;

abstract class AbstractClient extends AbstractEndpointHandler
{
    use ClientTrait;
    use WPClientTrait;
}
