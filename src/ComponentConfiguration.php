<?php

declare(strict_types=1);

namespace PoP\GraphQLClientsForWP;

use PoP\APIEndpoints\EndpointUtils;
use PoP\ComponentModel\ComponentConfiguration\ComponentConfigurationTrait;

class ComponentConfiguration
{
    use ComponentConfigurationTrait;
    private static $graphiQLClientEndpoint;
    private static $voyagerClientEndpoint;

    private static $getSiteURL;

    public static function getSiteURL(): string
    {
        // Define properties
        $envVariable = Environment::SITE_URL;
        $selfProperty = &self::$getSiteURL;

        // Initialize property from the environment/hook
        self::maybeInitializeConfigurationValue(
            $envVariable,
            $selfProperty
        );
        return $selfProperty;
    }

    /**
     * GraphiQL client endpoint, to be executed against the GraphQL single endpoint
     *
     * @return string
     */
    public static function getGraphiQLClientEndpoint(): string
    {
        // Define properties
        $envVariable = Environment::GRAPHIQL_CLIENT_ENDPOINT;
        $selfProperty = &self::$graphiQLClientEndpoint;
        $defaultValue = '/graphiql/';
        $callback = [EndpointUtils::class, 'slashURI'];

        // Initialize property from the environment/hook
        self::maybeInitializeConfigurationValue(
            $envVariable,
            $selfProperty,
            $defaultValue,
            $callback
        );
        return $selfProperty;
    }

    /**
     * Voyager client endpoint, to be executed against the GraphQL single endpoint
     *
     * @return string
     */
    public static function getVoyagerClientEndpoint(): string
    {
        // Define properties
        $envVariable = Environment::VOYAGER_CLIENT_ENDPOINT;
        $selfProperty = &self::$voyagerClientEndpoint;
        $defaultValue = '/schema/';
        $callback = [EndpointUtils::class, 'slashURI'];

        // Initialize property from the environment/hook
        self::maybeInitializeConfigurationValue(
            $envVariable,
            $selfProperty,
            $defaultValue,
            $callback
        );
        return $selfProperty;
    }
}
